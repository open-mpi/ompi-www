#include <cstdlib>
#include <iostream>
#include <tbb/compat/thread>
#include <tbb/tick_count.h>
#include "tbb/spin_mutex.h"
#include "tbb/mutex.h"
#include <mpi/mpi.h>
#include <string>
#include <boost/archive/text_oarchive.hpp>
#include <boost/archive/text_iarchive.hpp>
#include <fstream>
#include <time.h>
#include <vector>
#include <queue>

#include "LibraryInterface.h"

bool continueProcessing = true;

struct MPITags {
    typedef int type;
    enum {
        NoCommand,
        FinishProcessing,
        NewTask,
        ResultSize

    };
};

class SystemPars {
public:
    friend class boost::serialization::access;
    int MPI_size; 

    SystemPars() {}
    template<class Archive>
    void serialize(Archive & ar, const unsigned int version) {
        ar & MPI_size;
    }
} parObject = SystemPars();

bool yesno(std::string text) {
    std::cout << "Are you sure " << text << "? (y/n): ";
    char c;
    std::cin >> c;
    if (c == 'y') return true;
    else return false;
}

class ConsoleHandlerThread {
public:
    void operator ()() {
        std::string s;
        while(false) {
            std::cin >> s;
            if (s == "exit") {
                if (yesno("want to exit")) {
                    break;
                }
            } else {
                std::cout << "Unknown command.\n";
            }
        }
    }

    ConsoleHandlerThread() { }
};

class ConcurentTasksContainer {
private:
    std::vector<UInt64> minTasks;
    size_t minTasksNum;

    std::vector<MPITags::type> commands;
    size_t commandsNum;

    tbb::spin_mutex qMutex;

    std::vector<bool> haveSendedFP;
    size_t nFinishedNodes;

public:
    ConcurentTasksContainer() {
        minTasksNum = 0;
        qMutex = tbb::spin_mutex();
        nFinishedNodes = 0;
    }
    void resize(size_t size) {
        minTasks.resize(size);
        commands.resize(size);
        haveSendedFP.resize(size);
        nFinishedNodes = size;
    }

    bool hasCommands() {
        tbb::spin_mutex::scoped_lock l(qMutex);
        return commandsNum > 0;
    }

    bool hasCommand(size_t node) {
        tbb::spin_mutex::scoped_lock l(qMutex);
        return commands[node] != MPITags::NoCommand;
    }

    void setCommand(size_t node, MPITags::type com) {
        tbb::spin_mutex::scoped_lock l(qMutex);
        if (!haveSendedFP[node] && commands[node] == MPITags::NoCommand) {
            commands[node] = com;
            commandsNum++;
        }
        if (com == MPITags::FinishProcessing) {
            haveSendedFP[node] = true;
        }
    }

    MPITags::type getCommand(size_t node) {
        tbb::spin_mutex::scoped_lock l(qMutex);
        MPITags::type com = commands[node];
        if (commands[node] == MPITags::FinishProcessing) {
            nFinishedNodes--;
        }
        if (commands[node] != MPITags::NoCommand) {
            commands[node] = MPITags::NoCommand;
            commandsNum--;
        }
        return com;
    }

    void newTask(size_t node, UInt64 task) {
        tbb::spin_mutex::scoped_lock l(qMutex);
        if (!haveSendedFP[node]) {
            minTasks[node] = task;
            minTasksNum++;
        }
    }

    void endTask(size_t node) {
        tbb::spin_mutex::scoped_lock l(qMutex);
        minTasks[node] = 0;
        minTasksNum--;
    }

    bool isEmpty() {
        tbb::spin_mutex::scoped_lock l(qMutex);
        return minTasksNum == 0 && commandsNum == 0;
    }

    bool isProcessing() {
        tbb::spin_mutex::scoped_lock l(qMutex);
        return nFinishedNodes != 0;
    }

} taskContainer;

UInt8 stMutex = true;

class ServerThread {
public:
    void operator ()() {
        std::cout << "ServerThread: begin\n";
        srand(time(NULL));
        taskContainer.resize(parObject.MPI_size);
        MPI_Status state;
        UInt64 f;
        UInt32 FunctionsNum;
        stMutex = false;
        for(size_t i = parObject.MPI_size; i--;  ) {
            f = (rand() << 32);            
            MPI_Send(&f, 1, MPI_UNSIGNED_LONG_LONG, i, MPITags::NewTask, MPI_COMM_WORLD);
            taskContainer.newTask(i, f);
            std::cout << "ServerThread: present to " << i << std::endl;
        }

        while(!taskContainer.isEmpty()) {            
            MPI_Recv(&FunctionsNum, 1, MPI_UNSIGNED_LONG, MPI_ANY_SOURCE, MPITags::ResultSize, MPI_COMM_WORLD, &state);
            std::cout << "ServerThread: postreceived from " << state.MPI_SOURCE << "\n";
            taskContainer.endTask(state.MPI_SOURCE);

            MPI_Send(&f, 1, MPI_UNSIGNED_LONG_LONG, state.MPI_SOURCE, MPITags::FinishProcessing, MPI_COMM_WORLD);
        }
        std::cout << "ServerThread: end\n";
    }

    ServerThread() { }
};

void tasksProcessing(const int rank) {
    srand(time(NULL));
    std::cout << "tasksProcessing "<< rank << ": begin\n";
    MPI_Status state;
    UInt64 f1;
    UInt32 resultSize;

    bool continueProcessing = true;

    while(continueProcessing) {
        std::cout << "tasksProcessing "<< rank << ": waiting\n";
        MPI_Recv(&f1, 1, MPI_UNSIGNED_LONG_LONG, 0, MPI_ANY_TAG, MPI_COMM_WORLD, &state);
        std::cout << "tasksProcessing "<< rank << ": have a message\n";

        switch (state.MPI_TAG) {
            case MPITags::NewTask:
                std::this_thread::sleep_for(tbb::tick_count::interval_t((rand() % 5)/3.0));
                std::cout << "tasksProcessing "<< rank << ": minimization: sending\n";
                MPI_Send(&resultSize, 1, MPI_UNSIGNED_LONG, 0, MPITags::ResultSize, MPI_COMM_WORLD);
                break;
            case MPITags::FinishProcessing:
                continueProcessing = false;
                break;
        }

    }
    std::cout << "tasksProcessing "<< rank << ": end\n";
}

void loadSettings(const int size) {
    std::ifstream ifs("settings");
    if (!ifs.fail()) {
        boost::archive::text_iarchive ia(ifs);
        ia >> parObject;
    }
    parObject.MPI_size = size;
}

void saveSettings() {
    std::ofstream ofs("settings");
    boost::archive::text_oarchive oa(ofs);
    oa << parObject;
}

int main(int argc, char** argv) {
    MPI_Init(&argc, &argv);
    int rank, size;
    MPI_Comm_rank(MPI_COMM_WORLD,&rank);
    MPI_Comm_size(MPI_COMM_WORLD,&size);

    if (rank == 0) {
        loadSettings(size);

        std::thread *consoleHandlerThread;
        consoleHandlerThread = new std::thread(ConsoleHandlerThread());

        std::thread *server;
        server = new std::thread(ServerThread());

        while(stMutex)
            std::this_thread::sleep_for(tbb::tick_count::interval_t(0.5));
        tasksProcessing(rank);

        server->join();

        saveSettings();

        consoleHandlerThread->join();
    } else {
        tasksProcessing(rank);
    }
    
    MPI_Finalize();
    return 0;
}

