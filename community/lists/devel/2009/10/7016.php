<?
$subject_val = "Re: [OMPI devel] configure broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 21:22:34 2009" -->
<!-- isoreceived="20091023012234" -->
<!-- sent="Thu, 22 Oct 2009 21:22:26 -0400" -->
<!-- isosent="20091023012226" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure broken" -->
<!-- id="A1DAFFC9-2B97-4DAA-BDBF-A8AE6A5DCCCD_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1C1007F2-38E3-43C1-AB97-129E364C9731_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configure broken<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 21:22:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7017.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<li><strong>Previous message:</strong> <a href="7015.php">Tim Mattox: "Re: [OMPI devel] configure broken"</a>
<li><strong>In reply to:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7017.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<li><strong>Reply:</strong> <a href="7017.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you go at the top of the configure output, basically just after the  
<br>
detection of the revision, you will see this warning. Somehow, it  
<br>
doesn't stop configure from working, but it prevent it from doing what  
<br>
it was supposed to do as the two conditionals are having the wrong  
<br>
values.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 22, 2009, at 21:16 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Most interesting - I have been building on Mac OSX both yesterday  
</span><br>
<span class="quotelev1">&gt; and today with those changes without problem. I am on Snow Leopard,  
</span><br>
<span class="quotelev1">&gt; but I checked and &quot;true&quot; is indeed in /usr/bin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not seeing any warnings or problems. Perhaps a difference in  
</span><br>
<span class="quotelev1">&gt; configuration? Though I did also test it with a completely empty ./ 
</span><br>
<span class="quotelev1">&gt; configure --prefix=foo run, again with no problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2009, at 7:09 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There seems to be an issue with the latest changes on the configure  
</span><br>
<span class="quotelev2">&gt;&gt; scripts. A careful reading of the output of configure on MAC OS X  
</span><br>
<span class="quotelev2">&gt;&gt; shows a lot of errors/warnings, which leads to undefined  
</span><br>
<span class="quotelev2">&gt;&gt; AM_CONDITIONALS (PROJECT_OMPI_*). This apparently comes from  
</span><br>
<span class="quotelev2">&gt;&gt; configure.ac line 62 where the path to /bin/true is hardcoded! Of  
</span><br>
<span class="quotelev2">&gt;&gt; course /bin/true doesn't exist on MAC OS X, instead it is locate  
</span><br>
<span class="quotelev2">&gt;&gt; in /usr/bin/.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking how to create a ustar tar archive... gnutar
</span><br>
<span class="quotelev2">&gt;&gt; ../ompi/configure: line 5480: /bin/true: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ../ompi/configure: line 5488: /bin/true: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7017.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<li><strong>Previous message:</strong> <a href="7015.php">Tim Mattox: "Re: [OMPI devel] configure broken"</a>
<li><strong>In reply to:</strong> <a href="7014.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7017.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
<li><strong>Reply:</strong> <a href="7017.php">Ralph Castain: "Re: [OMPI devel] configure broken"</a>
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
