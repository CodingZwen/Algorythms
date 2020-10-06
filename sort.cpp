

#include <stdio.h>
#include <vector>
#include <iostream>

using namespace std;

void bubblesort()
{
    
    
    
}

template < typename T>
void show(T &t)
{
    int count =1; 
    for ( auto &r : t)
    cout << "element(" << count << ") mit Wert:" << r << endl;
}

void fillrandom(vector<int> &v)
{
    int random = 0;
    
    
    for(int i = 0; i < 10;i++)
    {
        random = rand()%100;
        v.push_back(random);
        
        
    }
}

int main()
{
    
    srand(time(NULL));
    srand(1);
    printf("Hello World");
    
    vector<int> v;
    fillrandom(v);
    show(v);
    
      printf("Hello World1");
    return 0;
}
