<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 15 18:02:13 2005" -->
<!-- isoreceived="20050615230213" -->
<!-- sent="Wed, 15 Jun 2005 23:02:05 +0000" -->
<!-- isosent="20050615230205" -->
<!-- name="Ben Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] re build time" -->
<!-- id="20050615230205.GA26995_at_flying-walenda.ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="15b669527e1fefe62fa38096aadcb082_at_open-mpi.org" -->
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
<strong>From:</strong> Ben Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-06-15 18:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0074.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0072.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0072.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0074.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0074.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[an aside for the mailing list admin before the main message:
<br>
I want to subscribe a secondary address 
<br>
and then check the box that
<br>
says nomail in the mailman membership list.
<br>
The secondary address can post mail but runs no
<br>
server to accept inbound mail, which tends to squish
<br>
the confirm portion of the subscribe dialog.
<br>
]
<br>
<p>On Wed, Jun 15, 2005 at 06:17:09PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ompi_info command was directly derived from the LAM/MPI laminfo 
</span><br>
<span class="quotelev1">&gt; command.  However, I've never liked the fact that there's a &quot;_&quot; in the 
</span><br>
<span class="quotelev1">&gt; name.  Should it be renamed?  Options I see are:
</span><br>
&nbsp;
<br>
I, for obvious reasons (mainly to do with 'well, most projects name it that'),
<br>
will vote for open-mpi-config and/or openmpi-config.
<br>
<p>In perusing the output of -al from ompi_info, some oddities
<br>
1)
<br>
For us sedders
<br>
MCA base: seems to have several instances of 
<br>
$heading : parameter $name default {linebreak}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$somevalue
<br>
which might be awk friendly, but i'm not sure how sed amateur 
<br>
friendly it is.  Typically this is around long path names.
<br>
<p>2)
<br>
A nice catalog of flags used at compile, prefix dirs etc is provided,
<br>
thank god and or Jeff. Of course ompi_info --help didn't tell me that.
<br>
However, the compiler variables specify unadorned
<br>
and hence unuseful names like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: g77
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
which just cause problems on the *very good* chance
<br>
that the user has a different path or installs new compilers.
<br>
I can't count the number of times i've &quot;debugged&quot; some user
<br>
trying to compile c++ code with a mismatched mpic[xx,++] wrapper.
<br>
Please, extract the full path name to the compilers your
<br>
wrappers are going to invoke and put them in ompi_info.
<br>
<p>thanks,
<br>
(an incrementally happier) Ben
<br>
<p><span class="quotelev1">&gt; 1. ompi_info (the current name)
</span><br>
<span class="quotelev1">&gt; 2. ompi-info
</span><br>
<span class="quotelev1">&gt; 3. ompiinfo
</span><br>
<span class="quotelev1">&gt; 4. something else entirely
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0074.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Previous message:</strong> <a href="0072.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>In reply to:</strong> <a href="0072.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0074.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
<li><strong>Reply:</strong> <a href="0074.php">Jeff Squyres: "Re: [O-MPI users] re build time"</a>
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
