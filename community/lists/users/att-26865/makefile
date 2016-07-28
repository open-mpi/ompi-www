EXECS=child parent
MPICC?=mpic++

all: ${EXECS}

child: child.cc
	${MPICC} -o child child.cc

parent: parent.cc
	${MPICC} -o parent parent.cc

clean:
	rm -f ${EXECS}
