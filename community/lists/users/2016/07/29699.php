<?
$subject_val = "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 16:46:02 2016" -->
<!-- isoreceived="20160719204602" -->
<!-- sent="Tue, 19 Jul 2016 13:45:58 -0700" -->
<!-- isosent="20160719204558" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking" -->
<!-- id="DCA061B7-4C49-4633-8088-0CB79E22A56A_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CABfhiS3FdOD7kUWzGdXVMqPZfM=0jEkK5CPL8ZDYf03CZ45dAw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 16:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29700.php">Steven Lo: "[OMPI users] ORTE daemon error"</a>
<li><strong>Previous message:</strong> <a href="29698.php">Jeff Squyres (jsquyres): "[OMPI users] This list is migrating!"</a>
<li><strong>In reply to:</strong> <a href="29697.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I have no brilliant ideas to offer - I&#226;&#128;&#153;m not seeing that problem. It usually indicates that the orte_schizo plugin is being pulled from an incorrect location. You might just look in your install directory and ensure that the plugin is there. Also ensure that your install lib is at the front of the LD_LIBRARY_PATH
<br>
<p><p><span class="quotelev1">&gt; On Jul 19, 2016, at 1:27 PM, Nathaniel Graham &lt;nrgraham23_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ive also blown away the install directory and did a complete reinstall in case there was something old left in the directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 19, 2016 at 2:21 PM, Nathaniel Graham &lt;nrgraham23_at_[hidden] &lt;mailto:nrgraham23_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; The prefix location has to be there.  Otherwise ompi attempts to install to a read only directory.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the install bin directory added to my path and the lib directory added to the LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run: which mpirun it is pointing to the expected place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 19, 2016 at 2:08 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Sounds to me like you have a confused build - I&#226;&#128;&#153;d whack your prefix location and do a &#226;&#128;&#156;make install&#226;&#128;&#157; again
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 19, 2016, at 1:04 PM, Nathaniel Graham &lt;nrgraham23_at_[hidden] &lt;mailto:nrgraham23_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to run the OSU tests for some results for a poster, but I am getting the following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am building off master with gcc on Red Hat Enterprise Linux Server release 6.7.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My config command is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ./configure --prefix=/users/ngraham/ompi_install --enable-mpi-java
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Everything builds fine, but I get this issue with mpirun.  I am running a Java program, but I do not believe this is Java related.  The mpirun command I am using is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     mpirun -np 2 Java OSUBW
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29694.php">http://www.open-mpi.org/community/lists/users/2016/07/29694.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29694.php">http://www.open-mpi.org/community/lists/users/2016/07/29694.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29695.php">http://www.open-mpi.org/community/lists/users/2016/07/29695.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29695.php">http://www.open-mpi.org/community/lists/users/2016/07/29695.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29697.php">http://www.open-mpi.org/community/lists/users/2016/07/29697.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29697.php">http://www.open-mpi.org/community/lists/users/2016/07/29697.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29699/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29700.php">Steven Lo: "[OMPI users] ORTE daemon error"</a>
<li><strong>Previous message:</strong> <a href="29698.php">Jeff Squyres (jsquyres): "[OMPI users] This list is migrating!"</a>
<li><strong>In reply to:</strong> <a href="29697.php">Nathaniel Graham: "Re: [OMPI users] mpirun: Symbol `orte_schizo' has different size in shared object, consider re-linking"</a>
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
