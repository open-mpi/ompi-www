<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 26 15:54:35 2007" -->
<!-- isoreceived="20070226205435" -->
<!-- sent="Mon, 26 Feb 2007 21:54:17 +0100" -->
<!-- isosent="20070226205417" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] comment on wiki/PrintfCodes" -->
<!-- id="45E348F9.9020505_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-26 15:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI devel] comment on wiki/PrintfCodes"</a>
<li><strong>Previous message:</strong> <a href="1318.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI devel] comment on wiki/PrintfCodes"</a>
<li><strong>Reply:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI devel] comment on wiki/PrintfCodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I can only speak for a 3 year old linux system but I read evenly the wiki
<br>
page <a href="https://svn.open-mpi.org/trac/ompi/wiki/PrintfCodes">https://svn.open-mpi.org/trac/ompi/wiki/PrintfCodes</a> and I wonder if
<br>
someone tried this code. On my system the PRId32 is defined as &quot;d&quot; for
<br>
example. so to use this you need to write something like this:
<br>
<p>printf(&quot;foo: %&quot; PRIu32 &quot;, bar: %ld\n&quot;, foo, bar);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
note this extra '%'.
<br>
<p>on the other hand printf have an extra length specifier for size_t, its
<br>
'z', so a minimal size_t printf conversion is &quot;%zu&quot;.
<br>
<p>Greetings
<br>
Bert Wesarg
<br>
<p>BTW: are there any plans to provide mpi datatypes for these stdint.h types
<br>
like {,u}int{8,16,32,64,max,ptr}_t?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI devel] comment on wiki/PrintfCodes"</a>
<li><strong>Previous message:</strong> <a href="1318.php">Brian Barrett: "Re: [OMPI devel] [PATCH] ompi_get_libtool_linker_flags.m4: fix	$extra_ldflags detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI devel] comment on wiki/PrintfCodes"</a>
<li><strong>Reply:</strong> <a href="1320.php">Brian Barrett: "Re: [OMPI devel] comment on wiki/PrintfCodes"</a>
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
