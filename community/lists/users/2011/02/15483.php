<?
$subject_val = "Re: [OMPI users] Calculate time spent on non blocking communication?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 10:23:48 2011" -->
<!-- isoreceived="20110202152348" -->
<!-- sent="Wed, 02 Feb 2011 07:22:27 -0800" -->
<!-- isosent="20110202152227" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Calculate time spent on non blocking communication?" -->
<!-- id="4D4976B3.8070700_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=nDnGFETpU=xCU+ZCX2yX50uFk7BCRExgGjvrK_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Calculate time spent on non blocking communication?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 10:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15484.php">Eugene Loh: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Previous message:</strong> <a href="15482.php">Mehdi Bozzo-Rey: "Re: [OMPI users] How closely tied is a specific release of OpenMPIto the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15479.php">Bibrak Qamar: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15492.php">Gustavo Correa: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
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
Bibrak Qamar wrote:
<blockquote
 cite="midAANLkTi=nDnGFETpU=xCU+ZCX2yX50uFk7BCRExgGjvrK@mail.gmail.com"
 type="cite">
  <div dir="ltr">Gus Correa, But it will include the time of
computation which took place before waitAll( ).<br>
  </div>
</blockquote>
What's wrong with that?<br>
<blockquote
 cite="midAANLkTi=nDnGFETpU=xCU+ZCX2yX50uFk7BCRExgGjvrK@mail.gmail.com"
 type="cite">
  <div dir="ltr">From: Bibrak Qamar &lt;<a
 href="mailto:bibrakc@gmail.com">bibrakc@gmail.com</a>&gt;<br>
I am using non-blocking send and receive, and i want to calculate the
time<br>
it took for the communication.<br>
  <br>
From: Eugene Loh &lt;<a href="mailto:eugene.loh@oracle.com">eugene.loh@oracle.com</a>&gt;<br>
You probably have to start by defining what you mean by "the time it<br>
took for the communication". &nbsp;Anyhow, the Peruse instrumentation in OMPI<br>
might help.<br>
  </div>
</blockquote>
Again, you should probably start by thinking more precisely about what
time you want to measure.&nbsp; E.g., ask yourself why the answer even
matters.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15484.php">Eugene Loh: "Re: [OMPI users] heterogenous cluster"</a>
<li><strong>Previous message:</strong> <a href="15482.php">Mehdi Bozzo-Rey: "Re: [OMPI users] How closely tied is a specific release of OpenMPIto the host operating system and other system software?"</a>
<li><strong>In reply to:</strong> <a href="15479.php">Bibrak Qamar: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15492.php">Gustavo Correa: "Re: [OMPI users] Calculate time spent on non blocking communication?"</a>
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
