<?
$subject_val = "Re: [OMPI users] configuration openMPI problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 11:49:18 2012" -->
<!-- isoreceived="20121126164918" -->
<!-- sent="Mon, 26 Nov 2012 11:49:07 -0500" -->
<!-- isosent="20121126164907" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration openMPI problem" -->
<!-- id="50B39D83.3050701_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAG8o1y7MT+RXEt9zKOnYUQ=8ExWmMS2ZRjE9vKCODpNjmz44jg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuration openMPI problem<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-26 11:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20770.php">Jeff Squyres: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Previous message:</strong> <a href="20768.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>In reply to:</strong> <a href="20767.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20771.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20771.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Diego
<br>
<p><span class="quotelev1"> &gt; deal all, dear Gustavo,
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; This is my bash.bashrc in ubuntu 12.04:
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; ##############################################
</span><br>
<span class="quotelev1"> &gt; /PATH=&quot;/opt/intel/bin/compilervars.sh intel64$PATH&quot;/
</span><br>
<span class="quotelev1"> &gt; /source /opt/intel/bin/compilervars.sh intel64/
</span><br>
<span class="quotelev1"> &gt; /source /opt/intel/mkl/bin/mklvars.sh intel64 mod lp64/
</span><br>
<span class="quotelev1"> &gt; /export PATH/
</span><br>
<span class="quotelev1"> &gt; ##############################################
</span><br>
<p>This is not an OpenMPI problem, but about Linux environment setup.
<br>
<p>Anyway, my guess is that all you
<br>
need in your .bashrc are these two lines (2 and 3):
<br>
<p>source /opt/intel/bin/compilervars.sh intel64
<br>
source /opt/intel/mkl/bin/mklvars.sh intel64 mod lp64
<br>
<p>The first line is probably messing up your PATH, the fourth line
<br>
may be just redundant with the the Intel compilervars.sh script.
<br>
Try commenting out lines 1 and 4 (with a leading # character),
<br>
and leave only lines 2 and 3.
<br>
<p>(Note, no '/' in the beginning or at the end of the lines, not sure
<br>
if the '/'s are part of your .bashrc or just part of your email.)
<br>
<p>After you make the change, then login again, or open
<br>
a new terminal/shell window and try these commands:
<br>
<p>which icc
<br>
which icpc
<br>
which ifort
<br>
printenv
<br>
<p>to make sure your environment is pointing
<br>
to the correct Intel compilers.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 11/26/2012 09:42 AM, Diego Avesani wrote:
<br>
<span class="quotelev1">&gt; I think that is correct according to your mail, so I do not think that
</span><br>
<span class="quotelev1">&gt; this is this problem.
</span><br>
<span class="quotelev1">&gt; I check the config.log file. It says:
</span><br>
<span class="quotelev1">&gt;   checking for gcc
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt; /configure:5133: result: icc/
</span><br>
<span class="quotelev1">&gt; /configure:5362: checking for C compiler version/
</span><br>
<span class="quotelev1">&gt; /configure:5371: icc --version &gt;&amp;5/
</span><br>
<span class="quotelev1">&gt; /./configure: line 5373: icc: command not found/
</span><br>
<span class="quotelev1">&gt; /configure:5382: $? = 127/
</span><br>
<span class="quotelev1">&gt; /configure:5371: icc -v &gt;&amp;5/
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt; When I write the simple project inside the config.log file in new file .c
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt;   int
</span><br>
<span class="quotelev1">&gt;   main ()
</span><br>
<span class="quotelev1">&gt;   {
</span><br>
<span class="quotelev1">&gt;     ;
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it works when I compile it with icc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I probably need to change also the .csh?
</span><br>
<span class="quotelev1">&gt; My current intel version is 13.0, When I compile it they told me to set
</span><br>
<span class="quotelev1">&gt; /compilervars.sh /moreover check iccvars.sh,  ifortvars.sh and
</span><br>
<span class="quotelev1">&gt; /compilervars.sh, /they are the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know what to do, could I compile open mpi with gcc,
</span><br>
<span class="quotelev1">&gt; gcpc,gnufort and then use it with intel fortran?
</span><br>
<span class="quotelev1">&gt; do you think that is a OpenMpi problem? Has someone compile it with
</span><br>
<span class="quotelev1">&gt; intel linux icc? which distro have you used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 25 November 2012 22:21, Gustavo Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     urce compilervars.sh intel64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20770.php">Jeff Squyres: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Previous message:</strong> <a href="20768.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>In reply to:</strong> <a href="20767.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20771.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20771.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
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
