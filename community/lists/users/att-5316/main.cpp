// compile with g++ -o sample -lreadline -ltermcap $(mpic++ -showme:compile) $(mpic++ -showme:link) main.cpp

#include <stdio.h>
#include <readline/readline.h>
#include <readline/history.h>

#include <stdlib.h>

#include <iostream>
#include <sstream>

#include <unistd.h>

#include <mpi.h>

int main(int argument_count, char ** argument_vector)
{
  const bool should_merge = true;

  std::cout << "exec(" << argument_vector[0] << ")" << std::endl;

  ::MPI_Init(&argument_count, &argument_vector);

  MPI_Comm parent;

  ::MPI_Comm_get_parent(&parent);

  if (parent == MPI_COMM_NULL)
  {
    const char * line = "";

    int index = 0;

    std::ostringstream stream;

    while ((line = ::readline(stream.str().c_str())) != NULL)
    {
      if (should_merge)
      {
        MPI_Comm intercommunicator;

        ::MPI_Comm_spawn(argument_vector[0], MPI_ARGV_NULL, 1, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &intercommunicator, MPI_ERRCODES_IGNORE);

        MPI_Comm intracommunicator;

        ::MPI_Intercomm_merge(intercommunicator, 0, &intracommunicator);
      }

      stream.str("");
      stream << ++index << ':' << ::strlen(line);
    }
  }
  else
  {
    if (should_merge)
    {
      MPI_Comm intracommunicator;

      ::MPI_Intercomm_merge(parent, 1, &intracommunicator);

      while (true) { ::sleep(100); }
    }
  }
}
