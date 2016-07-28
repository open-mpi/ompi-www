<?
$subject_val = "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 07:31:27 2014" -->
<!-- isoreceived="20140415113127" -->
<!-- sent="Tue, 15 Apr 2014 04:31:26 -0700 (PDT)" -->
<!-- isosent="20140415113126" -->
<!-- name="Cristian Butincu" -->
<!-- email="cbutincu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cygwin compilation problems for openmpi-1.8" -->
<!-- id="1397561486.93799.YahooMailNeo_at_web164901.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="534ABC4C.70307_at_gmail.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] Cygwin compilation problems for openmpi-1.8<br>
<strong>From:</strong> Cristian Butincu (<em>cbutincu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 07:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24198.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Previous message:</strong> <a href="24196.php">Muhammad Ansar Javed: "[OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>In reply to:</strong> <a href="24166.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24198.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Reply:</strong> <a href="24198.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the simple MPI program (test.c) I was talking about:

#include &lt;mpi.h&gt;
#include &lt;stdio.h&gt;

int main(int argc, char* argv[]) {
&#160;&#160;&#160; int my_rank; /* rank of process */
&#160;&#160;&#160; int p; /* number of processes */

&#160;&#160;&#160; /* start up MPI */
&#160;&#160;&#160; MPI_Init(&amp;argc, &amp;argv);

&#160;&#160;&#160; /* find out process rank */
&#160;&#160;&#160; MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);

&#160;&#160;&#160; /* find out number of processes */
&#160;&#160;&#160; MPI_Comm_size(MPI_COMM_WORLD, &amp;p);

&#160;&#160;&#160; printf(&quot;Hello MPI World! Num processes: %d\n&quot;, p);

&#160;&#160;&#160; /* shut down MPI */
&#160;&#160;&#160; MPI_Finalize();

&#160;&#160;&#160; return 0;
}

Issued commands:
$ mpicc test.c
$ orterun -np 4 a.exe

Everything compiles ok.
The second command doesn't work as expected on either open-mpi-1.7.4-1 or open-mpi-1.7.5-1.

Under openmpi-1.7.4-1 the output for the second command is (and the program hangs):

[cryb:00820] [[46167,1],1] ORTE_ERROR_LOG: Bad parameter in file 
/pub/devel/openmpi/openmpi-1.7.4-1/src/openmpi-1.7.4/orte/mca/oob/tcp/oob_tcp.c
 at line 291
[cryb:00820] [[46167,1],1] ORTE_ERROR_LOG: Data for 
specified key not found in file 
/pub/devel/openmpi/openmpi-1.7.4-1/src/openmpi-1.7.4/orte/runtime/orte_globals.c
 at line 503
[cryb:02392] [[46167,1],0] ORTE_ERROR_LOG: Bad parameter
 in file 
/pub/devel/openmpi/openmpi-1.7.4-1/src/openmpi-1.7.4/orte/mca/oob/tcp/oob_tcp.c
 at line 291
[cryb:02392] [[46167,1],0] ORTE_ERROR_LOG: Data for 
specified key not found in file 
/pub/devel/openmpi/openmpi-1.7.4-1/src/openmpi-1.7.4/orte/runtime/orte_globals.c
 at line 503
[cryb:05708] [[46167,1],2] ORTE_ERROR_LOG: Bad parameter
 in file 
/pub/devel/openmpi/openmpi-1.7.4-1/src/openmpi-1.7.4/orte/mca/oob/tcp/oob_tcp.c
 at line 291
[cryb:05708] [[46167,1],2] ORTE_ERROR_LOG: Data for 
specified key not found in file 
/pub/devel/openmpi/openmpi-1.7.4-1/src/openmpi-1.7.4/orte/runtime/orte_globals.c
 at line 503
[cryb:06352] [[46167,1],3] ORTE_ERROR_LOG: Bad parameter
 in file 
/pub/devel/openmpi/openmpi-1.7.4-1/src/openmpi-1.7.4/orte/mca/oob/tcp/oob_tcp.c
 at line 291
[cryb:06352] [[46167,1],3] ORTE_ERROR_LOG: Data for 
specified key not found in file 
/pub/devel/openmpi/openmpi-1.7.4-1/src/openmpi-1.7.4/orte/runtime/orte_globals.c
 at line 503



Under openmpi-1.7.5-1 the output for the second command is (and the program exists):
-------------------------------------------------------
Primary job&#160; terminated normally, but 1 process returned
a non-zero exit code.. Per user-direction, the job has been aborted.
-------------------------------------------------------
--------------------------------------------------------------------------
orterun detected that one or more processes exited with non-zero status, thus ca&#160;&#160; using
the job to be terminated. The first process to do so was:

&#160; Process name: [[33371,1],1]
&#160; Exit code:&#160;&#160;&#160; 65
--------------------------------------------------------------------------



On Sunday, April 13, 2014 7:33 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
 
On 12/04/2014 18:42, Cristian Butincu wrote:
&gt; Hello.
&gt;
&gt; The latest precompiled version to date of openmpi for cygwin is 1.7.4-1.

1.7.5 will be uploaded shortly.
I don't plan to upload 1.8 until 1.8.1,
but I will built it just to check.

&gt; Because I got some runtime errors when trying to run simple MPI
&gt; programs, I have decided to upgrade to openmpi-1.8.

which errors ?
1.8 should be almost identical to 1.7.5, except the oshmem default,
so unlike to make any difference


&gt; When trying to compile openmpi-1.8 under cygwin I get the following
&gt; error during &quot;make all&quot; and the build process halts:
&gt; Error: symbol `Lhwloc1' is already defined
&gt;
&gt; The commands issued:
&gt;&#160;  ./configure --prefix=$HOME/Apps/openmpi-1.8
&gt;&#160;  make all

cygwin package is currently built with

&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; --disable-mca-dso \
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  --disable-sysv-shmem \
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  --without-udapl \
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  --enable-cxx-exceptions \
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  --with-threads=posix \
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  --without-cs-fs \
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  --enable-heterogeneous \
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  --with-mpi-param_check=always \
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  --enable-contrib-no-build=vt,libompitrace \

--enable-mca-no-build=paffinity,installdirs-windows,timer-windows,shmem-sysv


&gt;
&gt; Platform:
&gt;&#160;  Operating system: Windows 8, 32 bits
&gt;&#160;  CPU: Intel Core2 Duo
&gt;&#160;  Memory: 4 GB
&gt;&#160;  Cygwin version: 1.7.29
&gt;
&gt; I have attached to this message an archive containing the output of
&gt; config and build processes.
&gt; Thank you.
&gt;
&gt;


_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24197/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24198.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Previous message:</strong> <a href="24196.php">Muhammad Ansar Javed: "[OMPI users] Problem in Open MPI (v1.8) Performance on 10G Ethernet"</a>
<li><strong>In reply to:</strong> <a href="24166.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24198.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Reply:</strong> <a href="24198.php">Marco Atzeri: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
