<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 14:07:19 2007" -->
<!-- isoreceived="20070524180719" -->
<!-- sent="Thu, 24 May 2007 11:07:05 -0600" -->
<!-- isosent="20070524170705" -->
<!-- name="Josh England" -->
<!-- email="jjengla_at_[hidden]" -->
<!-- subject="[OMPI users] settings not read from env" -->
<!-- id="1180026425.6268.26.camel_at_beauty" -->
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
<strong>From:</strong> Josh England (<em>jjengla_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 13:07:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3321.php">Jeff Squyres: "Re: [OMPI users] settings not read from env"</a>
<li><strong>Previous message:</strong> <a href="3319.php">Jeff Squyres: "Re: [OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3321.php">Jeff Squyres: "Re: [OMPI users] settings not read from env"</a>
<li><strong>Reply:</strong> <a href="3321.php">Jeff Squyres: "Re: [OMPI users] settings not read from env"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Found a bug maybe:
<br>
<p>I'm setting the following environment variables:
<br>
OMPI_MCA_btl=&quot;tcp,self&quot;
<br>
OMPI_MCA_btl_tcp_if_include=&quot;eth2&quot;
<br>
OMPI_MCA_btl_tcp_if_exclude=&quot;eth0&quot;
<br>
<p>However, when I run 'ompi_info --param btl tcp' I see (among other
<br>
things):
<br>
MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
<br>
MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &quot;eth2&quot;)
<br>
MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;eth0&quot;)
<br>
<p>^^^ The btl setting in my environment does not seem to be getting set
<br>
properly.  This looks like a bug, but I might just be doing something
<br>
wrong.
<br>
<p>-JE
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3321.php">Jeff Squyres: "Re: [OMPI users] settings not read from env"</a>
<li><strong>Previous message:</strong> <a href="3319.php">Jeff Squyres: "Re: [OMPI users] oob_tcp_if_include vs. oob_tcp_include"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3321.php">Jeff Squyres: "Re: [OMPI users] settings not read from env"</a>
<li><strong>Reply:</strong> <a href="3321.php">Jeff Squyres: "Re: [OMPI users] settings not read from env"</a>
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
