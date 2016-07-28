<?
$subject_val = "Re: [OMPI devel] adding new functions to a BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 18:03:29 2008" -->
<!-- isoreceived="20081022220329" -->
<!-- sent="Wed, 22 Oct 2008 15:06:43 -0700" -->
<!-- isosent="20081022220643" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] adding new functions to a BTL" -->
<!-- id="48FFA3F3.9010008_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081022215133.GA9160_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] adding new functions to a BTL<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-22 18:06:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4800.php">Paul H. Hargrove: "Re: [OMPI devel] Restarting processes on different node"</a>
<li><strong>Previous message:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4804.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
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
Ralf Wildenhues wrote:
<blockquote cite="mid20081022215133.GA9160@ins.uni-bonn.de" type="cite">
  <blockquote type="cite">
    <pre wrap="">Jeff Squyres wrote:
    </pre>
    <blockquote type="cite">
      <pre wrap="">We use lt_dlopen() to open the plugins (Libtool's wrapper for a   
portable dlopen).  It opens all plugins (DSOs) in a private scope.    
That private scope is kept deep in the OPAL MCA base and not exposed   
elsewhere in the code base.  So if you manually dlopen a plugin again,  
I'll bet that the linker realizes that that DSO has already been  
loaded into the process space and doesn't actually load it again (but  
doesn't fail).  So the dlsyms fail because you don't have access to  
the private scope from where Libtool originally opened the DSO.
      </pre>
    </blockquote>
  </blockquote>
  <pre wrap=""><!---->Shouldn't it work to re-dlopen the lib with RTLD_GLOBAL?
  </pre>
</blockquote>
I used dlopen("...", RTLD_LAZY | RTLD_GLOBAL).&nbsp; It gave me a non-NULL
handle, but subsequent dlsyms failed.<br>
<blockquote cite="mid20081022215133.GA9160@ins.uni-bonn.de" type="cite">
  <pre wrap="">Also, recent libltdl should allow you to choose which scope you want in
the first place, local or global, through lt_dladvise.</pre>
</blockquote>
I'm just learning all this dl stuff right now.&nbsp; Jeff's --enable-static
seems to do exactly what I want (namely, make things work in the way
that I'm familiar with!).&nbsp; I did try to figure out what OMPI was doing
and it seemed to me it was using RTLD_LAZY | RTLD_GLOBAL, which is why
I chose that.<br>
<br>
For now, --enable-static seems to do exactly what I want.&nbsp; Further
workarounds probably don't make any sense.<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4800.php">Paul H. Hargrove: "Re: [OMPI devel] Restarting processes on different node"</a>
<li><strong>Previous message:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
<li><strong>In reply to:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4804.php">Jeff Squyres: "Re: [OMPI devel] adding new functions to a BTL"</a>
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
