<?
$subject_val = "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 07:01:39 2011" -->
<!-- isoreceived="20110202120139" -->
<!-- sent="Wed, 02 Feb 2011 07:02:06 -0500" -->
<!-- isosent="20110202120206" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?" -->
<!-- id="4D4947BE.5030407_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="02B149D9-0764-48E1-90E1-0A3B31B98748_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 07:02:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15478.php">Bibrak Qamar: "[OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>Previous message:</strong> <a href="15476.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15473.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15481.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Reply:</strong> <a href="15481.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/01/2011 07:34 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 1, 2011, at 5:02 PM, Jeffrey A Cummings wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting a lot of push back from the SysAdmin folks claiming that OpenMPI is closely intertwined with the specific version of the operating system and/or other system software (i.e., Rocks on the clusters).
</span><br>
<span class="quotelev1">&gt; I wouldn't say that this is true.  We test across a wide variety of OS's and compilers.  I'm sure that there are particular platforms/environments that can trip up some kind of problem (it's happened before), but in general, Open MPI is pretty portable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To state my question another way:  Apparently each release of Linux and/or Rocks comes with some version of OpenMPI bundled in.  Is it dangerous in some way to upgrade to a newer version of OpenMPI?
</span><br>
<span class="quotelev1">&gt; Not at all.  Others have said it, but I'm one of the developers and I'll reinforce their answers: I regularly have about a dozen different installations of Open MPI on my cluster at any given time (all in different stages of development -- all installed to different prefixes).  I switch between them quite easily by changing my PATH and LD_LIBRARY_PATH (both locally and on remote nodes).
</span><br>
Not to be a lone descenting opinion here is my experience in doing the 
<br>
above.
<br>
<p>First if you are always recompiling your application with a specific 
<br>
version of OMPI then I would agree with everything Jeff said above.  
<br>
That is you can build many versions of OMPI on many linux versions and 
<br>
have them run.
<br>
<p>But there are definite pitfalls once you start trying to keep one set of 
<br>
executables and OMPI binaries across different Linux versions.
<br>
<p>1.  You may see executables not be able to use OMPI libraries that 
<br>
differ in the first dot number release (eg 1.3 vs 1.4 or 1.5 branches).  
<br>
We the community try to avoid these incompatibilities as much as 
<br>
possible but it happens on occasion (I think 1.3 to 1.4 is one such 
<br>
occasion).
<br>
<p>2.  The system libraries on different linux versions are not always the 
<br>
same.  At Oracle we build a binary distribution of OMPI that we test out 
<br>
on several different versions of Linux.  The key here is building on a 
<br>
machine that is essentially the lowest common denominator of all the 
<br>
system software that exists on the machines one will be running on.  
<br>
This is essentially why Oracle states a bounded set of OS versions a 
<br>
distribution runs on.  An example of this is there is a component in 
<br>
OMPI that was relying on a version of libbfd that changed significantly 
<br>
between Linux version.  Once we got rid of the usage of that library we 
<br>
were ok.  There are not &quot;a lot&quot; of these instances but the number is not 
<br>
zero.
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15477/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15477/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15478.php">Bibrak Qamar: "[OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>Previous message:</strong> <a href="15476.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15473.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15481.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<li><strong>Reply:</strong> <a href="15481.php">Jeff Squyres: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
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
