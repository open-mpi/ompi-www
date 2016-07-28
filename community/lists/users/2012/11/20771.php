<?
$subject_val = "Re: [OMPI users] configuration openMPI problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 12:55:11 2012" -->
<!-- isoreceived="20121126175511" -->
<!-- sent="Mon, 26 Nov 2012 14:55:06 -0300" -->
<!-- isosent="20121126175506" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration openMPI problem" -->
<!-- id="CAG8o1y6AKG6CoN0ZV0C4He=c7NkzMzou-do7Y+_oCEBHLCeafg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B39D83.3050701_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2012-11-26 12:55:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20772.php">Elken, Tom: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20770.php">Jeff Squyres: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>In reply to:</strong> <a href="20769.php">Gus Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20772.php">Elken, Tom: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20772.php">Elken, Tom: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear all,
<br>
Now it seems to work, I mean the confinguration ended and I did also make
<br>
installi all.
<br>
<p>Here It's what I did:
<br>
1) sudo bash (to put the openmpi folder in opt)
<br>
2)  ./configure --prefix=/opt/openmpi CC=icc CXX=icpc F77=ifort FC=ifort
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n.b I did not use sudo  ./configure --prefix=/opt/openmpi CC=icc
<br>
CXX=icpc F77=ifort FC=ifort
<br>
If I use sudo it does not work.
<br>
3) After that : make all install
<br>
<p>4) I changed my bash as:
<br>
source /opt/intel/bin/compilervars.sh intel64
<br>
source /opt/intel/mkl/bin/mklvars.sh intel64 mod lp64
<br>
export PATH
<br>
#openMPI
<br>
export PATH=/opt/openmpi/bin:$PATH
<br>
export LD_LIBRARY_PATH=/opt/openmpi/lib:$LD_LIBRARY_PATH
<br>
export PATH
<br>
<p>And here what I got now in my bash:
<br>
<p>laptop:~$ mpi
<br>
mpic++         mpiCC-vt       mpicxx-vt      mpif77         mpirun
<br>
mpicc          mpicleanup     mpiexec        mpif77-vt
<br>
mpiCC          mpic++-vt      mpiexec.hydra  mpif90
<br>
mpicc-vt       mpicxx         mpiexec.py     mpif90-vt
<br>
<p>It's seems the the installations has worked properly.
<br>
<p>Now I would like to test it with a simple hello project.  Ralph Castain suggest
<br>
me the following web site:
<br>
<a href="https://wiki.mst.edu/nic/examples/openmpi-intel-fortran90-example">https://wiki.mst.edu/nic/examples/openmpi-intel-fortran90-example</a>
<br>
<p>This is the results of my simulation:
<br>
&nbsp;Hello World! I am            0  of            1
<br>
<p>How ever I have a quad core processor, I belive (I run a  cat /proc/cpuinfo)
<br>
<p>Thanks a lot
<br>
<p>Diego
<br>
<p><p><p><p>On 26 November 2012 13:49, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; deal all, dear Gustavo,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is my bash.bashrc in ubuntu 12.04:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ##############################**################
</span><br>
<span class="quotelev2">&gt; &gt; /PATH=&quot;/opt/intel/bin/**compilervars.sh intel64$PATH&quot;/
</span><br>
<span class="quotelev2">&gt; &gt; /source /opt/intel/bin/compilervars.sh intel64/
</span><br>
<span class="quotelev2">&gt; &gt; /source /opt/intel/mkl/bin/mklvars.sh intel64 mod lp64/
</span><br>
<span class="quotelev2">&gt; &gt; /export PATH/
</span><br>
<span class="quotelev2">&gt; &gt; ##############################**################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is not an OpenMPI problem, but about Linux environment setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, my guess is that all you
</span><br>
<span class="quotelev1">&gt; need in your .bashrc are these two lines (2 and 3):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source /opt/intel/bin/compilervars.sh intel64
</span><br>
<span class="quotelev1">&gt; source /opt/intel/mkl/bin/mklvars.sh intel64 mod lp64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first line is probably messing up your PATH, the fourth line
</span><br>
<span class="quotelev1">&gt; may be just redundant with the the Intel compilervars.sh script.
</span><br>
<span class="quotelev1">&gt; Try commenting out lines 1 and 4 (with a leading # character),
</span><br>
<span class="quotelev1">&gt; and leave only lines 2 and 3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Note, no '/' in the beginning or at the end of the lines, not sure
</span><br>
<span class="quotelev1">&gt; if the '/'s are part of your .bashrc or just part of your email.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After you make the change, then login again, or open
</span><br>
<span class="quotelev1">&gt; a new terminal/shell window and try these commands:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which icc
</span><br>
<span class="quotelev1">&gt; which icpc
</span><br>
<span class="quotelev1">&gt; which ifort
</span><br>
<span class="quotelev1">&gt; printenv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to make sure your environment is pointing
</span><br>
<span class="quotelev1">&gt; to the correct Intel compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/26/2012 09:42 AM, Diego Avesani wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that is correct according to your mail, so I do not think that
</span><br>
<span class="quotelev2">&gt;&gt; this is this problem.
</span><br>
<span class="quotelev2">&gt;&gt; I check the config.log file. It says:
</span><br>
<span class="quotelev2">&gt;&gt;   checking for gcc
</span><br>
<span class="quotelev2">&gt;&gt; ##############################**################
</span><br>
<span class="quotelev2">&gt;&gt; /configure:5133: result: icc/
</span><br>
<span class="quotelev2">&gt;&gt; /configure:5362: checking for C compiler version/
</span><br>
<span class="quotelev2">&gt;&gt; /configure:5371: icc --version &gt;&amp;5/
</span><br>
<span class="quotelev2">&gt;&gt; /./configure: line 5373: icc: command not found/
</span><br>
<span class="quotelev2">&gt;&gt; /configure:5382: $? = 127/
</span><br>
<span class="quotelev2">&gt;&gt; /configure:5371: icc -v &gt;&amp;5/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ##############################**################
</span><br>
<span class="quotelev2">&gt;&gt; When I write the simple project inside the config.log file in new file .c
</span><br>
<span class="quotelev2">&gt;&gt; ##############################**################
</span><br>
<span class="quotelev2">&gt;&gt;   int
</span><br>
<span class="quotelev2">&gt;&gt;   main ()
</span><br>
<span class="quotelev2">&gt;&gt;   {
</span><br>
<span class="quotelev2">&gt;&gt;     ;
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; ##############################**################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it works when I compile it with icc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I probably need to change also the .csh?
</span><br>
<span class="quotelev2">&gt;&gt; My current intel version is 13.0, When I compile it they told me to set
</span><br>
<span class="quotelev2">&gt;&gt; /compilervars.sh /moreover check iccvars.sh,  ifortvars.sh and
</span><br>
<span class="quotelev2">&gt;&gt; /compilervars.sh, /they are the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not know what to do, could I compile open mpi with gcc,
</span><br>
<span class="quotelev2">&gt;&gt; gcpc,gnufort and then use it with intel fortran?
</span><br>
<span class="quotelev2">&gt;&gt; do you think that is a OpenMpi problem? Has someone compile it with
</span><br>
<span class="quotelev2">&gt;&gt; intel linux icc? which distro have you used?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 25 November 2012 22:21, Gustavo Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gus_at_[hidden]&gt;**&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     urce compilervars.sh intel64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20771/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20772.php">Elken, Tom: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20770.php">Jeff Squyres: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>In reply to:</strong> <a href="20769.php">Gus Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20772.php">Elken, Tom: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Reply:</strong> <a href="20772.php">Elken, Tom: "Re: [OMPI users] configuration openMPI problem"</a>
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
