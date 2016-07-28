<?
$subject_val = "Re: [OMPI devel] cpu stride and offset for processor binding";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 03:13:50 2008" -->
<!-- isoreceived="20080206081350" -->
<!-- sent="Wed, 6 Feb 2008 10:13:42 +0200" -->
<!-- isosent="20080206081342" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] cpu stride and offset for processor binding" -->
<!-- id="39C75744D164D948A170E9792AF8E7CAE14BC1_at_exil.voltaire.com" -->
<!-- charset="windows-1255" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CA12EF01_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] cpu stride and offset for processor binding<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 03:13:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3134.php">Jeff Squyres: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Previous message:</strong> <a href="3132.php">Ralph Castain: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="3131.php">Pak Lui: "[OMPI devel] cpu stride and offset for processor binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3134.php">Jeff Squyres: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Reply:</strong> <a href="3134.php">Jeff Squyres: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
<p>Hi,
<br>
<p>We are working right now on the new RMAPS component to allow rank mapping according to the host : socket : core.
<br>
<p>This component will be general and flexible. You will need to support the rankmap file in the command line that looks similar to hostfile and the component will do the rest.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Lenny.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>________________________________
<br>
<p>&#238;&#224;&#250;: devel-bounces_at_[hidden] &#225;&#249;&#237; Pak Lui
<br>
&#240;&#249;&#236;&#231;: &#227; 06/02/2008 02:01
<br>
&#224;&#236;: devel_at_[hidden]
<br>
&#240;&#229;&#249;&#224;: [OMPI devel] cpu stride and offset for processor binding
<br>
<p>Hi all,
<br>
<p>I am trying to implement something in the paffinity:solaris that would
<br>
allow me to specify the cpu id with striding (aka in a sequence) when
<br>
selecting which cpu ids to bind. e.g. For a cpu set that looks like
<br>
this: { 0 1 2 3 4 5 6 7 }, and stride is to 2, and offset is to 1 (which
<br>
means start at pos 1), then ranks will bind to the cpus in the following
<br>
order: { 1 3 5 7 2 4 6 0 }. The obvious intent is to take advantage of
<br>
the perf by allocating the ranks in a certain order on multi-core systems.
<br>
<p>But then we realized this may be implemented elsewhere outside the
<br>
solaris paffinity code. I see something in trac #1023 that may allow me
<br>
to specify a cpuid or cores in a range but it doesn't seem to allow me
<br>
specify the cpu id to bind in strides. And with that, rank specification
<br>
may seem to be doable, but I may end up entering a long list of cpu ids
<br>
in strides manually, if the machine happens to have many cpus. Plus
<br>
another down side is that Solaris doesn't seem to have stable interface
<br>
for me to extract out the core/socket information from the kernel. So
<br>
striding might be the only way for me to go for now.
<br>
<p>Is there some unspoken feature that's coming down the pipe that may
<br>
allow me to specify cpuids in a sequence, or we already have some
<br>
feature like that that I didn't know about? I look around but I don't
<br>
see anything like this.
<br>
<p>Thanks in advance for any comments.
<br>
<p><pre>
--
- Pak Lui
pak.lui_at_[hidden]
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3134.php">Jeff Squyres: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Previous message:</strong> <a href="3132.php">Ralph Castain: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Maybe in reply to:</strong> <a href="3131.php">Pak Lui: "[OMPI devel] cpu stride and offset for processor binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3134.php">Jeff Squyres: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
<li><strong>Reply:</strong> <a href="3134.php">Jeff Squyres: "Re: [OMPI devel] cpu stride and offset for processor binding"</a>
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
