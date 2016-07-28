<?
$subject_val = "Re: [OMPI devel] Manipulating OPAL event system";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 22:15:01 2009" -->
<!-- isoreceived="20090312021501" -->
<!-- sent="Wed, 11 Mar 2009 19:14:44 -0700" -->
<!-- isosent="20090312021444" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Manipulating OPAL event system" -->
<!-- id="49B87014.9010302_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f6ed2720903111731k73e7614di9febdee6b955cb2d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Manipulating OPAL event system<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 22:14:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5631.php">Jeff Squyres: "[OMPI devel] 1.3.1?"</a>
<li><strong>Previous message:</strong> <a href="5629.php">Timothy Hayes: "[OMPI devel] Manipulating OPAL event system"</a>
<li><strong>In reply to:</strong> <a href="5629.php">Timothy Hayes: "[OMPI devel] Manipulating OPAL event system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I an not 100% sure I correctly understand what you are asking, so 
<br>
correct me (or just ignore me) if I have totally missed the point here.
<br>
<p>You have said you have a lightweight socket implementation for Linux and 
<br>
managed to add a simple polling function into the module.  If am 
<br>
guessing that you mean that you have a Linux kernel loadable module, and 
<br>
that you have implemented either the &quot;poll&quot; method in struct 
<br>
file_operations, or more likely the &quot;poll&quot; method in the struct 
<br>
proto_ops.  If either is the case, then you are probably done.  Why?  
<br>
Because inside the Linux kernel the &quot;poll&quot; method is the fundamental 
<br>
building block for the poll(), select() and epoll().  Thus, there should 
<br>
be no need to care which mechanism use used by the OPAL event system.
<br>
<p>However, I am concerned by &quot;it sleeps for whatever amount of time is 
<br>
entered in user space&quot;.  If you have implemented the &quot;poll&quot; method for 
<br>
either struct file_operations or struct proto_ops, then you should not 
<br>
be sleeping.  Sleeping is the responsibility of generic kernel code that 
<br>
invokes your poll method.  You can find a tutorial on writing a poll 
<br>
method at <a href="http://www.xml.com/ldd/chapter/book/ch05.html">http://www.xml.com/ldd/chapter/book/ch05.html</a> and you may find 
<br>
others on the web as well.  That tutorial is for struct 
<br>
file_operations.  However, for struct proto_ops the logic is pretty much 
<br>
the same, but you get your struct socket as an additional argument.
<br>
<p>-Paul
<br>
<p>Timothy Hayes wrote:
<br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm currently writing my own BTL component that utilises a lightweight 
</span><br>
<span class="quotelev1">&gt; Linux socket module. It wouldn't have nearly as  much functionality as 
</span><br>
<span class="quotelev1">&gt; a TCP/IP socket but it does the job and I managed to add a simple 
</span><br>
<span class="quotelev1">&gt; polling function into the module, it sleeps for whatever amount of 
</span><br>
<span class="quotelev1">&gt; time is entered in user space then checks various things (if any 
</span><br>
<span class="quotelev1">&gt; messages have come in) and returns the mask. It's simple and probably 
</span><br>
<span class="quotelev1">&gt; not the best, but it works for the moment. :-)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm curious as to how I can can get this into the OPAL event system. I 
</span><br>
<span class="quotelev1">&gt; see it's based on libevent and after reading through the documentation 
</span><br>
<span class="quotelev1">&gt; I can see what it does but now how to make it work in my circumstance. 
</span><br>
<span class="quotelev1">&gt; It says it supports select(2) and poll(2) but when calling event_set() 
</span><br>
<span class="quotelev1">&gt; the only parameter I seem to be able to set is EV_READ or EV_WRITE, 
</span><br>
<span class="quotelev1">&gt; there's nothing further to indicate I want to poll the file descriptor 
</span><br>
<span class="quotelev1">&gt; (as opposed to calling select on it). Maybe I'm missing something 
</span><br>
<span class="quotelev1">&gt; without realising, but should my socket module be implementing some 
</span><br>
<span class="quotelev1">&gt; function to reveal what ways it can be queried for the presence of 
</span><br>
<span class="quotelev1">&gt; information? If not, maybe somebody has an idea of how I can make it 
</span><br>
<span class="quotelev1">&gt; work with the OPAL event system.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any advice or information would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; Tim Hayes
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5631.php">Jeff Squyres: "[OMPI devel] 1.3.1?"</a>
<li><strong>Previous message:</strong> <a href="5629.php">Timothy Hayes: "[OMPI devel] Manipulating OPAL event system"</a>
<li><strong>In reply to:</strong> <a href="5629.php">Timothy Hayes: "[OMPI devel] Manipulating OPAL event system"</a>
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
