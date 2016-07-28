<?
$subject_val = "Re: [OMPI users] MPIRUN + Environtment Variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 30 01:23:47 2011" -->
<!-- isoreceived="20110930052347" -->
<!-- sent="Fri, 30 Sep 2011 01:25:38 -0400" -->
<!-- isosent="20110930052538" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPIRUN + Environtment Variable" -->
<!-- id="4E8552D2.8010107_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALKntY38v7r4rGny6O3jc=fUrrZsWLvK2y_EqUcS6mr_zouzVA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPIRUN + Environtment Variable<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-30 01:25:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17475.php">Matthias Jurenz: "Re: [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<li><strong>Previous message:</strong> <a href="17473.php">Xin Tong: "[OMPI users] MPIRUN + Environtment Variable"</a>
<li><strong>In reply to:</strong> <a href="17473.php">Xin Tong: "[OMPI users] MPIRUN + Environtment Variable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 09/29/11 20:54, Xin Tong wrote:
<br>
<span class="quotelev1">&gt; I need to set up some environment variables before I run my 
</span><br>
<span class="quotelev1">&gt; application ( appA ). I am currently using mpirun -np 1 -host socrates 
</span><br>
<span class="quotelev1">&gt; (socrates is another machine) appA. Before appA runs, it expects 
</span><br>
<span class="quotelev1">&gt; some environment variables to be set up. How do i do that ?
</span><br>
% man mpirun
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To manage files and runtime environment:
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-x &lt;env&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Export  the  specified  environment  variables  to  the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;remote  nodes  before  executing the program.  Only one
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;environment variable can be specified  per  -x  option.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Existing  environment variables can be specified or new
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;variable names  specified  with  corresponding  values.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For example:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% mpirun -x DISPLAY -x OFILE=/tmp/out ...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The parser for the -x option is not very sophisticated;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;it  does  not even understand quoted values.  Users are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;advised to set variables in the environment,  and  then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use -x to export (not define) them.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17475.php">Matthias Jurenz: "Re: [OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<li><strong>Previous message:</strong> <a href="17473.php">Xin Tong: "[OMPI users] MPIRUN + Environtment Variable"</a>
<li><strong>In reply to:</strong> <a href="17473.php">Xin Tong: "[OMPI users] MPIRUN + Environtment Variable"</a>
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
