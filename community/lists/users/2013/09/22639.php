<?
$subject_val = "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 10 22:47:09 2013" -->
<!-- isoreceived="20130911024709" -->
<!-- sent="Wed, 11 Sep 2013 10:47:08 +0800" -->
<!-- isosent="20130911024708" -->
<!-- name="caohaijun" -->
<!-- email="amao.chj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to build a relocatable OpenMPI RPM ?" -->
<!-- id="CAJZ1kLGDHvexmhmkCeOuUgpa9hDvKq5boq70xrp-o79TgRZTmw_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="489726F8-FFC0-49B4-8A7B-4A0A2AAE1053_at_gmail.com" -->
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
<strong>Date:</strong> 2013-09-10 22:47:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Previous message:</strong> <a href="22638.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22638.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks. :)
<br>
<p><p><p><p>On Tue, Sep 10, 2013 at 10:19 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Ha - needed to read one email further down :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2013, at 3:03 AM, caohaijun &lt;amao.chj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got it. Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Jimmy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 10, 2013 at 5:02 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that Open MPI hard-codes its installation directory into some of its
</span><br>
<span class="quotelev2">&gt;&gt; libraries and executables (so that it can find its data files, etc.).  So
</span><br>
<span class="quotelev2">&gt;&gt; we don't support relocatable RPMs, in the RPM sense of the word
</span><br>
<span class="quotelev2">&gt;&gt; &quot;relocatable&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can, however, override OMPI's hard-coded installation location with
</span><br>
<span class="quotelev2">&gt;&gt; various environment variables, however.  See
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 10, 2013, at 5:02 AM, caohaijun &lt;amao.chj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi all
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; How to build a relocatable OpenMPI RPM ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I just use the following command to build a OpenMPI RPM from SRPM.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; rpmbuild --rebuild --define 'configure_options --with-devel-headers'
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.7.2-1.src.rpm
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It can successfully build the RPM. After installing with 'rpm -ivh
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/somewhere  openmpi-1.7.2-1.x86_64.rpm',  I tried to run a MPI
</span><br>
<span class="quotelev2">&gt;&gt; job, and then got:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # mpirun -bynode -hostfile ./hostfile -np 40 ./mpi/hello
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     opal_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     /usr/share/openmpi/help-opal-runtime.txt: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory.  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     orte_init:startup:internal-failure
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But I couldn't open the help file:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     /usr/share/openmpi/help-orte-runtime: No such file or directory.
</span><br>
<span class="quotelev2">&gt;&gt;  Sorry!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It seems the directory 'share'  is supposed to be under /usr.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Anyone can help me?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    Best Regards!
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;             Jimmy Haijun Cao   (&#178;&#220;&#186;&#163;&#190;&#252;)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -----------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Tel:   +86-188 1787 9959
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Email:amao.chj_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -----------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;             Haijun Cao   (&#178;&#220;&#186;&#163;&#190;&#252;)
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
<p><p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22639/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Previous message:</strong> <a href="22638.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22638.php">Ralph Castain: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<!-- nextthread="start" -->
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
