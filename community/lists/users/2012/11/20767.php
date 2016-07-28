<?
$subject_val = "Re: [OMPI users] configuration openMPI problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 09:42:34 2012" -->
<!-- isoreceived="20121126144234" -->
<!-- sent="Mon, 26 Nov 2012 11:42:30 -0300" -->
<!-- isosent="20121126144230" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration openMPI problem" -->
<!-- id="CAG8o1y7MT+RXEt9zKOnYUQ=8ExWmMS2ZRjE9vKCODpNjmz44jg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C9FEDFC7-AA6D-41AD-841B-8452DEF0D602_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-26 09:42:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20768.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Previous message:</strong> <a href="20766.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>In reply to:</strong> <a href="20763.php">Gustavo Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20769.php">Gus Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20769.php">Gus Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
deal all, dear Gustavo,
<br>
<p>This is my bash.bashrc in ubuntu 12.04:
<br>
<p>##############################################
<br>
*PATH=&quot;/opt/intel/bin/compilervars.sh intel64$PATH&quot;*
<br>
*source /opt/intel/bin/compilervars.sh intel64*
<br>
*source /opt/intel/mkl/bin/mklvars.sh intel64 mod lp64*
<br>
*export PATH*
<br>
##############################################
<br>
I think that is correct according to your mail, so I do not think that this
<br>
is this problem.
<br>
I check the config.log file. It says:
<br>
&nbsp;checking for gcc
<br>
##############################################
<br>
*configure:5133: result: icc*
<br>
*configure:5362: checking for C compiler version*
<br>
*configure:5371: icc --version &gt;&amp;5*
<br>
*./configure: line 5373: icc: command not found*
<br>
*configure:5382: $? = 127*
<br>
*configure:5371: icc -v &gt;&amp;5*
<br>
##############################################
<br>
When I write the simple project inside the config.log file in new file .c
<br>
##############################################
<br>
&nbsp;int
<br>
&nbsp;main ()
<br>
&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;;
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
##############################################
<br>
<p>it works when I compile it with icc
<br>
<p>Do I probably need to change also the .csh?
<br>
My current intel version is 13.0, When I compile it they told me to
<br>
set *compilervars.sh
<br>
*moreover check iccvars.sh,  ifortvars.sh and *compilervars.sh, *they are
<br>
the same.
<br>
<p>I do not know what to do, could I compile open mpi with gcc, gcpc,gnufort
<br>
and then use it with intel fortran?
<br>
do you think that is a OpenMpi problem? Has someone compile it with intel
<br>
linux icc? which distro have you used?
<br>
<p>Thank all
<br>
<p>Diego
<br>
<p><p><p><p>On 25 November 2012 22:21, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; urce compilervars.sh intel64
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20767/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20768.php">Ralph Castain: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Previous message:</strong> <a href="20766.php">Jeff Squyres: "Re: [OMPI users] Multiple RPM build fails"</a>
<li><strong>In reply to:</strong> <a href="20763.php">Gustavo Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20769.php">Gus Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20769.php">Gus Correa: "Re: [OMPI users] configuration openMPI problem"</a>
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
