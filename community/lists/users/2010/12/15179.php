<?
$subject_val = "Re: [OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 12:32:14 2010" -->
<!-- isoreceived="20101216173214" -->
<!-- sent="Thu, 16 Dec 2010 09:21:43 -0800" -->
<!-- isosent="20101216172143" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between single and double precision" -->
<!-- id="4D0A4AA7.7030808_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="72F509A2-E2B8-478E-8E79-79D6ADDC1557_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between single and double precision<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 12:21:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15180.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15178.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15173.php">Jeff Squyres: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15200.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15200.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Jeff Squyres wrote:
<blockquote cite="mid72F509A2-E2B8-478E-8E79-79D6ADDC1557@cisco.com"
 type="cite">
  <pre wrap="">On Dec 16, 2010, at 5:14 AM, Mathieu Gontier wrote:
  </pre>
  <blockquote type="cite">
    <pre wrap="">We have lead some tests and the option btl_sm_eager_limit has a positive consequence on the performance. Eugene, thank you for your links.
    </pre>
  </blockquote>
  <pre wrap=""><!---->Good!
Just be aware of the tradeoff you're making: space for time.
  </pre>
  <blockquote type="cite">
    <pre wrap="">Now, to offer a good support to our users, we would like to get the value of this parameters at the runtime. I am aware I can have the value running ompi_info like following:
ompi_info --param btl all | grep btl_sm_eager_limit

but can I get the value during the computation when I run mpirun -np 12 --mca btl_sm_eager_limit 8192 my_binary? This value could be compared with the buffer size into my code and some warning put into the output.
    </pre>
  </blockquote>
  <pre wrap=""><!---->We don't currently have a user-exposed method of retrieving MCA parameter values.  As you noted in your 2nd email, if the value was set by setting an environment variable, then you can just getenv() it.  But if the value was set some other way (e.g., via a file), it won't necessarily be loaded in the environment.
  </pre>
</blockquote>
If you are desperate to get this value, I suppose you could run
empirical tests within your application.&nbsp; This would be a little ugly,
but could work well enough if you are desperate enough.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15180.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15178.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15173.php">Jeff Squyres: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15200.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15200.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
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
