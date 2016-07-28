<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 14:52:42 2011" -->
<!-- isoreceived="20110518185242" -->
<!-- sent="Wed, 18 May 2011 12:52:33 -0600" -->
<!-- isosent="20110518185233" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="E8DEB1AE-1579-468A-90A0-4EF7A850448E_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DD4114C.5070806_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.4rc2 is up<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-18 14:52:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9265.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9263.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9263.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9259.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is the 'pgCC -V' output from versions that I have access to.
<br>
<p>$ pgCC -V
<br>
<p>pgCC 7.1-6 64-bit target on x86-64 Linux -tp gh-64 
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2007, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p><p>$ pgCC -V
<br>
<p>pgCC 9.0-3 64-bit target on x86-64 Linux -tp gh-64 
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2009, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p><p>$ pgCC -V
<br>
<p>pgCC 10.3-0 64-bit target on x86-64 Linux -tp istanbul-64 
<br>
Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
<br>
Copyright 2000-2010, STMicroelectronics, Inc.  All Rights Reserved.
<br>
<p><pre>
--
Samuel Gutierrez
Los Alamos National Laboratory
On May 18, 2011, at 12:34 PM, Paul H. Hargrove wrote:
&gt; Below is a sampling of &quot;pgCC -V&quot; outputs in response to Jeff's question.
&gt; The complete output looks like:
&gt; 
&gt; $ pgCC -V
&gt; 
&gt; pgCC 11.1-0 64-bit target on x86-64 Linux -tp nehalem
&gt; Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
&gt; Copyright 2000-2011, STMicroelectronics, Inc.  All Rights Reserved.
&gt; 
&gt; Including the initial blank line.
&gt; 
&gt; Here is the &quot;important&quot; line for a range of versions I can currently access:
&gt; 
&gt; pgCC 7.2-5 64-bit target on x86-64 Linux -tp gh-64
&gt; pgCC 8.0-6 64-bit target on x86-64 Linux -tp gh-64
&gt; pgCC 9.0-3 64-bit target on x86-64 Linux -tp nehalem-64
&gt; pgCC 10.8-0 64-bit target on x86-64 Linux -tp nehalem-64
&gt; pgCC 11.1-0 64-bit target on x86-64 Linux -tp nehalem
&gt; 
&gt; I am afraid my system w/ 5.x and 6.x versions was retired last month (not joking).
&gt; However, I found the following output for the C (not C++) compiler in my bug database:
&gt; 
&gt; pgcc 6.0-8 32-bit target on x86-64 Linux
&gt; 
&gt; And for their MacOSX port, there is a wrinkle.  As anybody who as dealt w/ mpicc vs mpiCC knows, Apple's filesystem  is case PRESERVING but case-insensitive.  So, there PGI's C++ compiler is &quot;pgcpp&quot; and the -V output (also from my bug database) looks like:
&gt; 
&gt; pgcpp 7.1-5 64-bit target on Apple OS/X
&gt; 
&gt; 
&gt; -Paul
&gt; 
&gt; 
&gt; On 5/18/2011 5:50 AM, Jeff Squyres wrote:
&gt;&gt; (addinglibtool-patches_at_[hidden])
&gt;&gt; 
&gt;&gt; Is this guaranteed to work for all versions of the PGI compiler?  I.e., does &quot;pgCC -V&quot; always return something in the form of (digit)+\. ?
&gt; 
&gt; -- 
&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
&gt; Future Technologies Group
&gt; HPC Research Department                   Tel: +1-510-495-2352
&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9265.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>Previous message:</strong> <a href="9263.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<li><strong>In reply to:</strong> <a href="9263.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9259.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
