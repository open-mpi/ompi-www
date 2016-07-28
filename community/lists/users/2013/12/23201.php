<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 16 15:20:43 2013" -->
<!-- isoreceived="20131216202043" -->
<!-- sent="Mon, 16 Dec 2013 20:19:13 +0000" -->
<!-- isosent="20131216201913" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm" -->
<!-- id="CED4AD1B.16024%bwbarre_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPkf6e11tW5c+ttfz7DRjkJmyVMbSmc9y5y3-i_VSCGqU+PheQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-16 15:19:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23202.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Previous message:</strong> <a href="23200.php">Gus Correa: "Re: [OMPI users] typo in opal/memoryhooks/memory.h (1.6.5)"</a>
<li><strong>In reply to:</strong> <a href="23197.php">Siddhartha Jana: "Re: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23202.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Reply:</strong> <a href="23202.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Maybe reply:</strong> <a href="23290.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23353.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siddhartha -
<br>
<p>Christoph mentioned how to change the cross-over for shared memory, but it's really per-transport (so you'd have to change it for your off-node transport as well).  That's all in the FAQ you mentioned, so hopefully you can take it from there.  Note that, in general, moving the eager limits has some unintended side effects.  For example, it can cause more / less copies.  It can also greatly increase memory usage.
<br>
<p>Good luck,
<br>
<p>Brian
<br>
<p>On 12/16/13 1:49 AM, &quot;Siddhartha Jana&quot; &lt;siddharthajana24_at_[hidden]&lt;mailto:siddharthajana24_at_[hidden]&gt;&gt; wrote:
<br>
<p>Thanks Christoph.
<br>
I should have looked into the FAQ section on MCA params setting @ :
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#available-mca-params">http://www.open-mpi.org/faq/?category=tuning#available-mca-params</a>
<br>
<p>Thanks again,
<br>
-- Siddhartha
<br>
<p><p>On 16 December 2013 02:41, Christoph Niethammer &lt;niethammer_at_[hidden]&lt;mailto:niethammer_at_[hidden]&gt;&gt; wrote:
<br>
Hi Siddhartha,
<br>
<p>MPI_Send/Recv in Open MPI implements both protocols and chooses based on the message size which one to use.
<br>
You can use the mca parameter &quot;btl_sm_eager_limit&quot; to modify the behaviour.
<br>
<p>Here the corresponding info obtained from the ompi_info tool:
<br>
<p>&quot;btl_sm_eager_limit&quot; (current value: &lt;4096&gt;, data source: default value)
<br>
Maximum size (in bytes) of &quot;short&quot; messages (must be &gt;= 1)
<br>
<p>Regards
<br>
Christoph Niethammer
<br>
<p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203&lt;tel:%2B%2B49%280%29711-685-87203&gt;
email: niethammer_at_[hidden]&lt;mailto:niethammer_at_[hidden]&gt;
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
----- Urspr&#252;ngliche Mail -----
Von: &quot;Siddhartha Jana&quot; &lt;siddharthajana24_at_[hidden]&lt;mailto:siddharthajana24_at_[hidden]&gt;&gt;
An: &quot;OpenMPI users mailing list&quot; &lt;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
Gesendet: Samstag, 14. Dezember 2013 13:44:12
Betreff: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm
Hi
In OpenMPI, are MPI_Send, MPI_Recv (and friends) implemented using rendezvous protocol or eager protocol?
If both, is there a way to choose one or the other during runtime or while building the library?
If there is a threshold of the message size that dictates the protocol to be used, is there a way I can alter that threshold value?
If different protocols were used for different versions of the library in the past, could someone please direct me to the exact version numbers of the implementations that used one or the other protocol?
Thanks a lot,
Siddhartha
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23202.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Previous message:</strong> <a href="23200.php">Gus Correa: "Re: [OMPI users] typo in opal/memoryhooks/memory.h (1.6.5)"</a>
<li><strong>In reply to:</strong> <a href="23197.php">Siddhartha Jana: "Re: [OMPI users] Configuration for rendezvous and eager protocols: two-sided comm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23202.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Reply:</strong> <a href="23202.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Maybe reply:</strong> <a href="23290.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23353.php">Siddhartha Jana: "Re: [OMPI users] [EXTERNAL] Re: Configuration for rendezvous and eager protocols: two-sided comm"</a>
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
