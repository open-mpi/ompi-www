<?
$subject_val = "Re: [OMPI users] configuration openMPI problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 13:36:34 2012" -->
<!-- isoreceived="20121126183634" -->
<!-- sent="Mon, 26 Nov 2012 18:36:16 +0000" -->
<!-- isosent="20121126183616" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration openMPI problem" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB7164ACA67_at_FMSMSX107.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y6AKG6CoN0ZV0C4He=c7NkzMzou-do7Y+_oCEBHLCeafg_at_mail.gmail.com" -->
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
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-26 13:36:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20773.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20771.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20771.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20773.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20773.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now I would like to test it with a simple hello project.  Ralph Castain suggest me the following web site:
<br>
<a href="https://wiki.mst.edu/nic/examples/openmpi-intel-fortran90-example">https://wiki.mst.edu/nic/examples/openmpi-intel-fortran90-example</a>
<br>
<p>This is the results of my simulation:
<br>
&nbsp;Hello World! I am            0  of            1
<br>
<p>How ever I have a quad core processor, I belive (I run a  cat /proc/cpuinfo)
<br>
[Tom]
<br>
What was your mpirun command?
<br>
Did it have a '-np 4'  in it to tell mpirun that you want 4 processes to be spawned?
<br>
<p>Don't be afraid to read the FAQ on running MPI programs:
<br>
<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p>-Tom
<br>
<p>Thanks a lot
<br>
<p>Diego
<br>
<p><p><p>On 26 November 2012 13:49, Gus Correa &lt;gus_at_[hidden]&lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
<br>
Hi Diego
<br>
<p><p><span class="quotelev1">&gt; deal all, dear Gustavo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is my bash.bashrc in ubuntu 12.04:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt; /PATH=&quot;/opt/intel/bin/compilervars.sh intel64$PATH&quot;/
</span><br>
<span class="quotelev1">&gt; /source /opt/intel/bin/compilervars.sh intel64/
</span><br>
<span class="quotelev1">&gt; /source /opt/intel/mkl/bin/mklvars.sh intel64 mod lp64/
</span><br>
<span class="quotelev1">&gt; /export PATH/
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<p>This is not an OpenMPI problem, but about Linux environment setup.
<br>
<p>Anyway, my guess is that all you
<br>
need in your .bashrc are these two lines (2 and 3):
<br>
<p><p>source /opt/intel/bin/compilervars.sh intel64
<br>
source /opt/intel/mkl/bin/mklvars.sh intel64 mod lp64
<br>
The first line is probably messing up your PATH, the fourth line
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
<p><p>On 11/26/2012 09:42 AM, Diego Avesani wrote:
<br>
I think that is correct according to your mail, so I do not think that
<br>
this is this problem.
<br>
I check the config.log file. It says:
<br>
&nbsp;&nbsp;checking for gcc
<br>
##############################################
<br>
/configure:5133: result: icc/
<br>
/configure:5362: checking for C compiler version/
<br>
/configure:5371: icc --version &gt;&amp;5/
<br>
/./configure: line 5373: icc: command not found/
<br>
/configure:5382: $? = 127/
<br>
/configure:5371: icc -v &gt;&amp;5/
<br>
<p>##############################################
<br>
When I write the simple project inside the config.log file in new file .c
<br>
##############################################
<br>
&nbsp;&nbsp;int
<br>
&nbsp;&nbsp;main ()
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
##############################################
<br>
<p>it works when I compile it with icc
<br>
<p>Do I probably need to change also the .csh?
<br>
My current intel version is 13.0, When I compile it they told me to set
<br>
/compilervars.sh /moreover check iccvars.sh,  ifortvars.sh and
<br>
/compilervars.sh, /they are the same.
<br>
<p><p>I do not know what to do, could I compile open mpi with gcc,
<br>
gcpc,gnufort and then use it with intel fortran?
<br>
do you think that is a OpenMpi problem? Has someone compile it with
<br>
intel linux icc? which distro have you used?
<br>
<p>Thank all
<br>
<p>Diego
<br>
<p><p><p><p>On 25 November 2012 22:21, Gustavo Correa &lt;gus_at_[hidden]&lt;mailto:gus_at_[hidden]&gt;
<br>
&lt;mailto:gus_at_[hidden]&lt;mailto:gus_at_[hidden]&gt;&gt;&gt; wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;urce compilervars.sh intel64
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20772/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20773.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20771.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20771.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20773.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20773.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
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
