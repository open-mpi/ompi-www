#include <mpi.h>

int main(int argc, char* argv[]) {
    MPI::Init();
    MPI::File file;
    char buf[1024];
    file = MPI::File::Open(MPI::COMM_WORLD,
            "/tmp/memleak", MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI::INFO_NULL);

    // create a struct consisting of a derived datatype
    MPI::Aint displacementsAlpha[] = {0};
    MPI::Datatype memberTypesAlpha[] = {MPI::INT};
    int lengthsAlpha[] = {1};
    MPI::Datatype structAlpha = MPI::Datatype::Create_struct(1, lengthsAlpha, displacementsAlpha, memberTypesAlpha);
    structAlpha.Commit();

    MPI::Aint displacementsBravo[] = {0};
    MPI::Datatype memberTypesBravo[] = {structAlpha};
    int lengthsBravo[] = {1};
    MPI::Datatype structBravo = MPI::Datatype::Create_struct(1, lengthsBravo, displacementsBravo, memberTypesBravo);
    structBravo.Commit();

    // this will leak like hell
    for (;;) 
        file.Write(buf, 1, structBravo);

    file.Close();
    MPI::Finalize();
}


