#include <stdio.h>


int main(int argc, char** argv) {
  int valueX = 8;
  do {
    printf("Count down %d\n", valueX);
    valueX = (valueX - 1);
  } while (valueX >= 0);
  printf("Finish!");
  return 0;
}