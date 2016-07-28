<?
$subject_val = "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 06:09:11 2009" -->
<!-- isoreceived="20090930100911" -->
<!-- sent="Wed, 30 Sep 2009 12:09:06 +0200" -->
<!-- isosent="20090930100906" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi" -->
<!-- id="9b0da5ce0909300309l770d0f40j67c10aff5a13745a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="bccd656d0909300200p3ed2701fv60f67079041d187a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 06:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10831.php">Gus Correa: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>Previous message:</strong> <a href="10829.php">vighnesh_at_[hidden]: "[OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>In reply to:</strong> <a href="10826.php">ankur pachauri: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10831.php">Gus Correa: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>Reply:</strong> <a href="10831.php">Gus Correa: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
All of your questions are answered in the FAQ...
<br>
<p>If you have a TCP/IP connection between your machines so that each
<br>
machine can reach every other one,
<br>
that will be ok.
<br>
<p>First make sure you can get access from each machine to every other
<br>
one using ssh without a password.
<br>
See the FAQ:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
<br>
<p>Make sure to set PATH and LD_LIBRARY_PATH as described in the FAQ:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<p>Next, make sure your application is accessible by all of your
<br>
machines. I use an nfs directory shared by all my machines,
<br>
and that is where i put the application.
<br>
<p>To start your application, follow the instructions in the FAQ:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p>If you want to use host files, read about how to use them in the FAQ:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
<br>
<p>Hope that helps
<br>
<p>Jody
<br>
<p>On Wed, Sep 30, 2009 at 11:00 AM, ankur pachauri
<br>
&lt;ankurpachauri_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been able to install open mpi on two independent machines having FC
</span><br>
<span class="quotelev1">&gt; 10. The simple hello world programms are running fine on the independent
</span><br>
<span class="quotelev1">&gt; machines....But can any one pls help me by letting me know how to connect
</span><br>
<span class="quotelev1">&gt; the two machines and run a common program between the two....how do we a do
</span><br>
<span class="quotelev1">&gt; a lamboot -v lamhosts in case of openmpi?
</span><br>
<span class="quotelev1">&gt; How do we get the open mpi running on the two computers simultaneously and
</span><br>
<span class="quotelev1">&gt; excute a common program on the two machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 30, 2009 at 12:24 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; Have look at the Open MPI FAQ:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It gives you all the information you need to start working with your
</span><br>
<span class="quotelev2">&gt;&gt; cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Sep 30, 2009 at 8:25 AM, ankur pachauri &lt;ankurpachauri_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; dear all,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; i am new to openmpi, all that i need is to set up the cluster of around
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 5
</span><br>
<span class="quotelev3">&gt;&gt; &gt; nodes in my lab, i am using fedora 7 in the lab. so i'll be thankfull to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; you
</span><br>
<span class="quotelev3">&gt;&gt; &gt; if let me know the steps or the procedure to setup the cluster(as in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; case of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lam/mpi- passwordless ssh or nfs mount and ...).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ankur Pachauri.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 09927590910
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Research Scholar,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; software engineering.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Department of Mathematics
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dayalbagh Educational Institute
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dayalbagh,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; AGRA
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ankur Pachauri.
</span><br>
<span class="quotelev1">&gt; 09927590910
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Research Scholar,
</span><br>
<span class="quotelev1">&gt; software engineering.
</span><br>
<span class="quotelev1">&gt; Department of Mathematics
</span><br>
<span class="quotelev1">&gt; Dayalbagh Educational Institute
</span><br>
<span class="quotelev1">&gt; Dayalbagh,
</span><br>
<span class="quotelev1">&gt; AGRA
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10831.php">Gus Correa: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>Previous message:</strong> <a href="10829.php">vighnesh_at_[hidden]: "[OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>In reply to:</strong> <a href="10826.php">ankur pachauri: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10831.php">Gus Correa: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
<li><strong>Reply:</strong> <a href="10831.php">Gus Correa: "Re: [OMPI users] how to set up the cluster of 5 nodes in openmpi"</a>
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
