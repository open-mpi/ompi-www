<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 09:16:19 2010" -->
<!-- isoreceived="20100428131619" -->
<!-- sent="Wed, 28 Apr 2010 07:16:12 -0600" -->
<!-- isosent="20100428131612" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing" -->
<!-- id="0DB0E148-424D-4E53-A5D2-FA4611059877_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="t2sc609bc801004280435vff68aafv7fea0768128116a0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 09:16:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7835.php">Ioannis E. Venetis: "[OMPI devel]  Porting OpenMPI to a new system"</a>
<li><strong>Previous message:</strong> <a href="7833.php">Jeff Squyres: "[OMPI devel] shared library versions in 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="7831.php">Bogdan Costescu: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7843.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7843.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Faster component initialization/finalization times is one of the main  
<br>
motivating factors of this work.  The general idea is to get away from  
<br>
creating a rather large backing file.  With respect to module  
<br>
bandwidth and latency, mmap and sysv seem to be comparable - at least  
<br>
that is what my preliminary tests have shown.  As it stands, I have  
<br>
not come across a  situation where the mmap SM component doesn't work  
<br>
or is slower.
<br>
<p>Hope that helps,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Apr 28, 2010, at 5:35 AM, Bogdan Costescu wrote:
&gt; On Tue, Apr 27, 2010 at 7:55 PM, Samuel K. Gutierrez  
&gt; &lt;samuel_at_[hidden]&gt; wrote:
&gt;&gt; With Jeff and Ralph's help, I have completed a System V shared memory
&gt;&gt; component for Open MPI.
&gt;
&gt; What is the motivation for this work ? Are there situations where the
&gt; mmap based SM component doesn't work or is slow(er) ?
&gt;
&gt; Kind regards,
&gt; Bogdan
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7835.php">Ioannis E. Venetis: "[OMPI devel]  Porting OpenMPI to a new system"</a>
<li><strong>Previous message:</strong> <a href="7833.php">Jeff Squyres: "[OMPI devel] shared library versions in 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="7831.php">Bogdan Costescu: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7843.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7843.php">Ethan Mallove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for	Community Input and Testing"</a>
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
