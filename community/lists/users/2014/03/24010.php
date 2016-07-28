<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 19:15:48 2014" -->
<!-- isoreceived="20140327231548" -->
<!-- sent="Thu, 27 Mar 2014 19:15:47 -0400" -->
<!-- isosent="20140327231547" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="5334B123.3050402_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AB8F8C84-CED9-4EFD-AE33-2EBAC7551B67_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 19:15:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24011.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="24009.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24013.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24013.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/27/2014 05:58 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Mar 27, 2014, at 4:06 PM, &quot;Sasso, John (GE Power &amp; Water, Non-GE)&quot;
</span><br>
&lt;John1.Sasso_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I noticed that I could not find --display-map in any of the man pages.
</span><br>
<span class="quotelev2">&gt;&gt; Intentional?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oops; nope.  I'll ask Ralph to add it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nah ...
<br>
John: As far as I can tell,
<br>
good features are intentional in OMPI.
<br>
The bad ones seem to be just minor lapses.
<br>
And minor lapses are benign.
<br>
They help keep us alert. :)
<br>
<p>So, in the spirit of pitching in two-cent contributions
<br>
to build an even more perfect OMPI documentation than we already have:
<br>
man pages, README file, FAQ, and this rocking mailing list rhythm,
<br>
(Who can ask for anything more?),
<br>
I think I found what seems to be the corresponding mca parameter:
<br>
<p>rmaps_base_display_map
<br>
<p>which defaults to 0, but should be set to 1
<br>
to produce the same effect of
<br>
mpiexec --display-map.
<br>
<p>Right?
<br>
<p>Cheers,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24011.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="24009.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24013.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24013.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
