<?
$subject_val = "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 10 10:18:20 2013" -->
<!-- isoreceived="20130910141820" -->
<!-- sent="Tue, 10 Sep 2013 07:18:16 -0700" -->
<!-- isosent="20130910141816" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to build a relocatable OpenMPI RPM ?" -->
<!-- id="402DC404-0390-423D-94FE-6DF2055DFDCF_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAJZ1kLGKQdcckvhrR4X9qo=1SOz-CGX6RomA7BRB9ozx2_07xg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-10 10:18:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22638.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Previous message:</strong> <a href="22636.php">Ralph Castain: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>In reply to:</strong> <a href="22631.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me be sure I understand. You configure without a prefix and then tell rpm to install at a specified prefix?
<br>
<p>You may need to add something to envar - will look tonite
<br>
<p>Sent from my iPhone
<br>
<p>On Sep 10, 2013, at 2:09 AM, caohaijun &lt;amao.chj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to put prefix in PATH and LD_LIBRARY_PATH, but the problem still occurs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now my envs in ~/.bashrc  are as follows (--prefix=/root/program/orte):
</span><br>
<span class="quotelev1">&gt; export PATH=/root/program/orte:/root/program/orte/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/root/program/orte:/root/program/orte/lib64:/root/program/orte/lib64/openmpi:/root/program/orte/lib:/root/program/orte/lib/openmpi:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the  RPM is not relocatable. Because if I install OpenMPI using tarball with the same --prefix=/root/program/orte and the same env in ~/.bashrc, mpirun works well. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best,
</span><br>
<span class="quotelev1">&gt; Jimmy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 10, 2013 at 11:23 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You need to put prefix location in your path and ld_library_path
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my iPhone
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 9, 2013, at 8:02 PM, caohaijun &lt;amao.chj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How to build a relocatable OpenMPI RPM ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just use the following command to build a OpenMPI RPM from SRPM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rpmbuild --rebuild --define 'configure_options --with-devel-headers' openmpi-1.7.2-1.src.rpm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It can successfully build the RPM. After installing with 'rpm -ivh --prefix=/somewhere  openmpi-1.7.2-1.x86_64.rpm',  I tried to run a MPI job, and then got:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # mpirun -bynode -hostfile ./hostfile -np 40 ./mpi/hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     opal_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /usr/share/openmpi/help-opal-runtime.txt: No such file or directory.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     orte_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /usr/share/openmpi/help-orte-runtime: No such file or directory.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems the directory 'share'  is supposed to be under /usr.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyone can help me? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Best Regards!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Jimmy Haijun Cao   (&#230;&#155;&#185;&#230;&#181;&#183;&#229;&#134;&#155;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel:   +86-188 1787 9959
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email:amao.chj_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Best Regards!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             Haijun Cao   (&#230;&#155;&#185;&#230;&#181;&#183;&#229;&#134;&#155;)
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Tel:   +86-188 1787 9959
</span><br>
<span class="quotelev1">&gt; Email:amao.chj_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22637/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22638.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Previous message:</strong> <a href="22636.php">Ralph Castain: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>In reply to:</strong> <a href="22631.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22630.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
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
