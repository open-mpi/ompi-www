<?php
$topdir = "../../..";
$title = "Open Tool for Parameter Optimization (otpo) Documentation";
include_once("$topdir/software/otpo/current/version.inc");
include_once("$topdir/projects/otpo/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");

?>

<h2> What is OTPO? </h2>

<p>OTPO (Open Tool for Parameter Optimizations) is an Open MPI specific tool
that is meant to explore the MCA parameter space. In Open MPI, the user can
specify at run-time many values for MCA parameters; try, e.g. <code>ompi_info --param
all all</code>. Alternatively, you can focus on a single aspect of parameters, e.g. the
parameters of the OpenIB BTL (<code>ompi_info --param btl openib</code>).</p>

<p>OTPO is a tool that takes in a list of any MCA parameters, with a user
specified range of values for those parameters, and for every combination of
the MCA parameter values, OTPO executes an MPI job, measuring execution time
(the only measurement available right now), bandwidth, etc. The tests used
for the measurements are modular. Right now, OTPO supports:
<ul>
<li> <?php  print("<a href=\"http://www.scl.ameslab.gov/netpipe/\">");
?> Netpipe</a></li>
<li> <?php  print("<a href=\"http://liinwww.ira.uka.de/~skampi/\">"); ?> Skampi</a></li>
<li> <?php
print("<a href=\"http://www.nas.nasa.gov/Resources/Software/software.html\">"); ?>NAS Parallel Benchmarks</a></li>
</ul>
OTPO outputs a list of the
best parameter combinations for a certain test.</p>

<p>The main purpose of OTPO is to explore the effect of the MCA
parameters on different machines with different architectures and
configurations, and explore the dependencies between the MCA
parameters themselves. OTPO is meant to run on the head node of a
cluster, and it forks MPI jobs after exporting the current combination
of MCA parameters on the nodes.</p>

<p>OTPO is built on top of ADCL (Abstract Data and Communication
Library). ADCL is an application level communication library aiming at
providing the highest possible performance for application level
communication operations in a given execution environment. OTPO uses
ADCL to provide the runtime selection logic and choosing the best
combination of parameters.</p>


<h2> How to build OTPO? </h2>

<?php print_code("./autogen.sh
./configure (this will configure OTPO with the included ADCL library)
make "); ?>



<h2> How to run OTPO? </h2>

<p>OTPO includes a copy of the ADCL library, but if the user has another copy of
ADCL already installed on their machine, they can set the ADCL directory on
configure.  The first thing the user needs to specify is the file containing
the parameters. Basically the file contains the name of the parameter and the
following options for each parameter:</p>
<p><ul>
<li> <code> -d default value </code> </li>
</ul></p>
Option to set the possible values manually:
<p><ul>
<li> <code> -p {possible_values}</code>: option for the user to explicitly list the
 possible values for the parameter</li>
</ul></p>

OR to specify a range with an increment by an operation with a specific RPN:
<p><ul>
<li> <code>-r start_value end_value</code>: specify the start and end value for the
 parameter </li>
<li> <code>-t traversal_method arguments</code>: The method to traverse the range of
 variables for the parameter. The increment method is only available now,
 which takes as arguments the operation and the operator.</li>
<li> <code>-i rpn</code>: RPN condition that the parameter combinations must satisfy.</li>
</ul></p>


<p>A sample file (OpenIB_Parameters) is included for convenience. However,
note that the MCA parameter space for Open MPI is always changing, so
some parameters might be invalid or the values might not make
sense. This is just to help with showing how the format of the input
file is.</p>

<p>Next the user needs to have a benchmark compiled and ready to run
somewhere. Currently, OTPO supports 3 benchmarks: </p>
<p><ul>
<li> Netpipe </li>
<li> Skampi (5.0.1 is required for otpo to work with skampi). </li>
<li> NPB </li>
</ul> </p>

<p>However it's not hard to write a plugin for another benchmark, since
the design is modular.</p>

<p>After specifying the list of parameters, the user is ready to run
OTPO. The usage options for running OTPO are:</p>

Required:
<p><ul>
<li> <code>-p &lt;InputFileName&gt;</code> (file that contains the parameters)</li>
<li> <code>-t &lt;test&gt;</code> (name of test; currently supported: Netpipe, NPB, Skampi) </li>
<li> <code>-w &lt;test_path&gt;</code> (path to the test on your system and the executable) </li>
</ul></p>
<p>Example: <code>-w /home/user1/Netpipe/NPmpi </code></p>

Optional:
<p><ul>
<li> <code>-d</code> (debug output) </li>
<li> <code>-v</code> (verbose output) </li>
<li> <code>-s</code> (status output) </li>
<li> <code>-n</code> (silent/no output) </li>
<li> <code>-l &lt;message_length&gt;</code> (default is 1 byte) </li>
<li> <code>-h &lt;hostfile&gt;</code> </li>
<li> <code>-m &lt;mca_params&gt;</code> (mca parameters that you want set when running with OMPI.
   Note that those are not the parameters that you want to tune. Those are
   parameters that you want when runnning all the tests) </li>
<li> <code>-f &lt;format&gt;</code> (format of output, TXT)</li>
<li> <code>-o &lt;output_dir&gt;</code> (directory where the results will be placed, default: <code>results</code>)</li>
<li> <code>-b &lt;interrupt_file&gt;</code> (file to write intermediate data when interrupted,
   default: <code>interrupt.txt</code>)</li>
<li> <code>-r &lt;interrupt_file&gt;</code> (the file which contains the data to resume execution) <li>
<li> <code>-c</code> Collective operation number (if using Skampi). Valid numbers are:
 <ul>
   <li> 0 - Bcast </li>
   <li> 1 - Barrier </li>
   <li> 2 - Reduce </li>
   <li> 3 - Allreduce </li>
   <li> 4 - Gather </li>
   <li> 5 - Allgather </li>
   <li> 6 - Gatherv </li>
   <li> 7 - Allgatherv </li>
   <li> 8 - Alltoall </li>
   <li> 9 - Alltoallv </li>
   <li> 10 - Scatter </li>
   <li> 11 - Scatterv</li>
  </ul>
<li> <code>-a</code> Number of processes (if using Skampi)</li>
<li> <code>-e</code> Operation for Reduce/Allreduce like MPI_MAX</li>
<li> <code>-x</code> generate an input file from an ouput result file</li>
</ul></p>

<p>A sample run command would be:</p>

<p> <?php print_code("./otpo -p OpenIB_Parameters -t Netpipe -w path_to_where_netpipe_is_compiled/NPmpi"); ?></p>

<p>The <code>--generate_input_file</code> (<code>-x</code>) option is
a feature that allows a user
to give OTPO previously generated result files. OTPO would then use
these files to parse the parameters and the values noted as the best
values for those parameters and generate a new input parameter file
from them automatically. This can be done using UNION or INTERSECTION
of the files, which should be specified with the operation parameter
<code>-e</code> or <code>--operations</code>.</p>

<p>An example to run this feature on three result files (R1, R2, and R3):
  <pre>
./otpo -x R1 R2 R3 -e union -o union_input_file
./otpo -x R1 R2 R3 -e intersection -o intersection_input_file
</pre>
</p>

<p> NOTE: Using skampi to tune parameters in the COLL
Hierarch Module works only with OMPI trunk and 1.5 and above. As for
the COLL tuned module, currently it works in OMPI version where the
flag <code>use_dynamic_rules</code> MCA parameter works correctly, as is the case for
the 1.4 series starting from revision v1.4.2, the upcoming v1.5 series and
trunk starting from revision 22510.
</p>

<h2> What are the results?</h2>

<p>The results are placed in a sub-directory. Every single run of OTPO
produces a file with a time stamp that contains the best attribute
combinations. It gives the best combination around the best value that
it found. These results files produced by OTPO are meant to be
intermediate results to an analysis tool in OTPO that takes in any
number of result files, does some sort of analysis, and gives the
final analysis to the user. The analysis option in OTPO is still under
development and research.</p>


<h2> OTPO and ADCL:</h2>

<p>We mentioned earlier that OTPO is built on top of ADCL. We have to
note that ADCL is an MPI application, but we are not interested in the
parts of ADCL where MPI is needed. So we created a dummy MPI library
within ADCL that the user can use instead of the real MPI library
(option set on configure). The other reason for the dummy MPI library
is the fact that MPI and fork cause badness in the
application. Another options in ADCL that need to be set on configure
are the user level timings and number of tests. In short, if the user
is using his own ADCL version, he must have the following configure
options:</p>

<p><ul>
<li> <code>--enable-printf-tofile</code> </li>
<li> <code>--with-num-tests=1</code> </li>
<li> <code>--enable-userlevel-timings</code> </li>
<li> <code>--enable-dummy-mpi</code> </li>
</ul></p>


<h2>To Do </h2>

<p>OTPO still misses the analysis portion. It generates the results, but
those results need to be interpreted and given to the user in a nicely
formatted way. This is a challenge due to the fact that the result
files may be very large, and may not have the same attributes.</p>

<p> For some benchmarks, such as the Skampi tests, it could be useful to
execute the benchmark for more than one message length at once, and separate
the results of the analysis on a per-message length basis.</p>


<?php include_once("$topdir/includes/footer.inc");
