cmake_minimum_required(VERSION 2.8)
project(mpihelloworld)
enable_language(Fortran)
find_package(MPI REQUIRED)

#include_directories(${MPI_INCLUDE_PATH})
include_directories(${MPI_Fortran_INCLUDE_PATH})

add_executable(mpihelloworld mpihelloworld.F90)
#link_directories(${MPI_LIBRARIES})
#target_link_libraries(mpihelloworld ${MPI_LIBRARIES})

link_directories(${MPI_Fortran_LIBRARIES})
target_link_libraries(mpihelloworld ${MPI_Fortran_LIBRARIES})
