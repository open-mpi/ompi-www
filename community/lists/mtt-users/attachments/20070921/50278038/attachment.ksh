#======================================================================
# Generic OMPI core performance testing template configuration
#======================================================================

[MTT]
# Leave this string so that we can identify this data subset in the
# database
# OMPI Core: Use a "test" label until we're ready to run real results
description = [testbake]
#description = [2007 collective performance bakeoff]
# OMPI Core: Use the "trial" flag until we're ready to run real results
trial = 1

# Put other values here as relevant to your environment.

#----------------------------------------------------------------------

[Lock]
# Put values here as relevant to your environment.

#======================================================================
# MPI get phase
#======================================================================

[MPI get: MVAPICH2]
mpi_details = MVAPICH2

module = Download
download_url = http://mvapich.cse.ohio-state.edu/download/mvapich2/mvapich2-0.9.8p3.tar.gz

#======================================================================
# Install MPI phase
#======================================================================

[MPI install: MVAPICH2]
mpi_get = mvapich2
save_stdout_on_success = 1
merge_stdout_stderr = 0
# Adjust this for your site (this is what works at Cisco).  Needed to
# launch in SLURM; adding this to LD_LIBRARY_PATH here propagates this
# all the way through the test run phases that use this MPI install,
# where the test executables will need to have this set.
prepend_path = LD_LIBRARY_PATH /opt/SLURM/lib

module = MVAPICH2
# Adjust this to be where your OFED is installed
mvapich2_setenv = OPEN_IB_HOME /usr/local/ofed
mvapich2_build_script = make.mvapich2.ofa
mvapich2_compiler_name = gnu
mvapich2_compiler_version = &get_gcc_version()
# These are needed to launch through SLURM; adjust as appropriate.
mvapich2_additional_wrapper_ldflags = -L/opt/SLURM/lib 
mvapich2_additional_wrapper_libs = -lpmi

#======================================================================
# MPI run details
#======================================================================

[MPI Details: MVAPICH2]

# Launching through SLURM.  If you use mpdboot instead, you need to
# ensure that multiple mpd's on the same node don't conflict (or never
# happen).
exec = srun @alloc@ -n &test_np() &test_executable() &test_argv()

# If not using SLURM, you'll need something like this (not tested).
# You may need different hostfiles for running by slot/by node.
#exec = mpiexec -np &test_np() --host &hostlist() &test_executable()

network = loopback,verbs,shmem

# In this example, each node has 4 CPUs, so to launch "by node", just
# specify that each MPI process will use 4 CPUs.
alloc = &if(&eq(&test_alloc(), "node"), "-c 2", "")

#======================================================================
# Test get phase
#======================================================================

[Test get: skampi]
module = SVN
svn_url = https://svn.open-mpi.org/svn/ompi-tests/trunk/skampi-5.0.1

#======================================================================
# Test build phase
#======================================================================

[Test build: skampi]
test_get = skampi
save_stdout_on_success = 1
merge_stdout_stderr = 1
stderr_save_lines = 100

module = Shell
# Set EVERYONE_CAN_MPI_IO for HP MPI
shell_build_command = <<EOT
make CFLAGS="-O2 -DPRODUCE_SPARSE_OUTPUT -DEVERYONE_CAN_MPI_IO"
EOT

#======================================================================
# Test Run phase
#======================================================================

[Test run: skampi]
test_build = skampi
pass = &and(&cmd_wifexited(), &eq(&cmd_wexitstatus(), 0))
# Timeout hueristic: 10 minutes
timeout = 10:00
save_stdout_on_pass = 1
# Ensure to leave this value as "-1", or performance results could be lost!
stdout_save_lines = -1
merge_stdout_stderr = 1
np = &env_max_procs()

argv = -i &find("mtt_.+.ski", "input_files_bakeoff")

specify_module = Simple
analyze_module = SKaMPI

simple_pass:tests = skampi

#======================================================================
# Reporter phase
#======================================================================

[Reporter: IU database]
module = MTTDatabase

mttdatabase_realm = OMPI
mttdatabase_url = https://www.open-mpi.org/mtt/submit/
# Change this to be the username and password for your submit user.
# Get this from the OMPI MTT administrator.
mttdatabase_username = uh
mttdatabase_password = &stringify(&cat("/home/mschaara/mtt-testing/mtt-db-password.txt"))
# Change this to be some short string identifying your cluster.
mttdatabase_platform = shark

mttdatabase_debug_filename = mttdb_debug_file_perf
mttdatabase_keep_debug_files = 1

#----------------------------------------------------------------------

# This is a backup reporter; it also writes results to a local text
# file

[Reporter: text file backup]
module = TextFile

textfile_filename = $phase-$section-$mpi_name-$mpi_version.txt

textfile_summary_header = <<EOT
Hostname: &shell("hostname")
uname: &shell("uname -a")
Username: &shell("who am i")
EOT

textfile_summary_footer =
textfile_detail_header =
textfile_detail_footer =

textfile_textwrap = 78
