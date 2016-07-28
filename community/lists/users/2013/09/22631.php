<?
$subject_val = "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 10 05:09:38 2013" -->
<!-- isoreceived="20130910090938" -->
<!-- sent="Tue, 10 Sep 2013 17:09:36 +0800" -->
<!-- isosent="20130910090936" -->
<!-- name="caohaijun" -->
<!-- email="amao.chj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to build a relocatable OpenMPI RPM ?" -->
<!-- id="CAJZ1kLGKQdcckvhrR4X9qo=1SOz-CGX6RomA7BRB9ozx2_07xg_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="F085DE97-C010-4A05-BDA0-63EB7CF7F8E5_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to build a relocatable OpenMPI RPM ?<br>
<strong>From:</strong> caohaijun (<em>amao.chj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-10 05:09:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22632.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22629.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22637.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Reply:</strong> <a href="22637.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>I tried to put prefix in PATH and LD_LIBRARY_PATH, but the problem still
<br>
occurs.
<br>
<p>Now my envs in ~/.bashrc  are as follows (--prefix=/root/program/orte):
<br>
export PATH=/root/program/orte:/root/program/orte/bin:$PATH
<br>
export
<br>
LD_LIBRARY_PATH=/root/program/orte:/root/program/orte/lib64:/root/program/orte/lib64/openmpi:/root/program/orte/lib:/root/program/orte/lib/openmpi:$LD_LIBRARY_PATH
<br>
<p><p>It seems the  RPM is not relocatable. Because if I install OpenMPI using
<br>
tarball with the same --prefix=/root/program/orte and the same env in
<br>
~/.bashrc, mpirun works well.
<br>
<p>best,
<br>
Jimmy
<br>
<p><p>On Tue, Sep 10, 2013 at 11:23 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; You need to put prefix location in your path and ld_library_path
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 9, 2013, at 8:02 PM, caohaijun &lt;amao.chj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to build a relocatable OpenMPI RPM ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just use the following command to build a OpenMPI RPM from SRPM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpmbuild --rebuild --define 'configure_options --with-devel-headers'
</span><br>
<span class="quotelev1">&gt; openmpi-1.7.2-1.src.rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It can successfully build the RPM. After installing with 'rpm -ivh
</span><br>
<span class="quotelev1">&gt; --prefix=/somewhere  openmpi-1.7.2-1.x86_64.rpm',  I tried to run a MPI
</span><br>
<span class="quotelev1">&gt; job, and then got:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun -bynode -hostfile ./hostfile -np 40 ./mpi/hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     opal_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /usr/share/openmpi/help-opal-runtime.txt: No such file or directory.
</span><br>
<span class="quotelev1">&gt;  Sorry!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     orte_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /usr/share/openmpi/help-orte-runtime: No such file or directory.
</span><br>
<span class="quotelev1">&gt;  Sorry!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems the directory 'share'  is supposed to be under /usr.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone can help me?
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Best Regards!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Jimmy Haijun Cao   (&#178;&#220;&#186;&#163;&#190;&#252;)
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Tel:   +86-188 1787 9959
</span><br>
<span class="quotelev1">&gt; Email:amao.chj_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
   Best Regards!
            Haijun Cao   (&#178;&#220;&#186;&#163;&#190;&#252;)
-----------------------------------------------------------
Tel:   +86-188 1787 9959
Email:amao.chj_at_[hidden]
-----------------------------------------------------------
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22631/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22632.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22629.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22637.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Reply:</strong> <a href="22637.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
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
