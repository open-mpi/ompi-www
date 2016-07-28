<?
$subject_val = "[OMPI devel] memcpy MCA framework";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 09:19:22 2008" -->
<!-- isoreceived="20080816131922" -->
<!-- sent="Sat, 16 Aug 2008 09:19:17 -0400" -->
<!-- isosent="20080816131917" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] memcpy MCA framework" -->
<!-- id="48A6D3D5.6050606_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.3458.1218820074.9342.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] memcpy MCA framework<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 09:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4581.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Previous message:</strong> <a href="4579.php">Jeff Squyres: "[OMPI devel] DNS issues with open-mpi.org"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4581.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Reply:</strong> <a href="4581.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
Thanks for bringing the below up and asking for a redirection to the 
<br>
devel list.  I think looking/using the MCA memcpy framework would be a 
<br>
good thing to do and maybe we can work on this together once I get out 
<br>
from under some commitments.  However, some of the challenges that 
<br>
originally scared me away from looking at the memcpy MCA is whether we 
<br>
really want all the OMPI memcpy's to be replaced or just specific ones.  
<br>
Also, I was concerned on trying to figure out which version of memcpy I 
<br>
should be using.  I believe currently things are done such that you get 
<br>
one version based on which system you compile on.  For Sun there may be 
<br>
several different SPARC platforms that would need to use different 
<br>
memcpy code but we would like to just ship one set of bits.  
<br>
<p>Not saying the above not doable under the memcpy MCA framework just that 
<br>
it somewhat scared me away from thinking about it at first glance.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Date: Fri, 15 Aug 2008 12:08:18 -0400 From: &quot;Tim Mattox&quot; 
</span><br>
<span class="quotelev1">&gt; &lt;timattox_at_[hidden]&gt; Subject: Re: [OMPI users] SM btl slows down 
</span><br>
<span class="quotelev1">&gt; bandwidth? To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt; Message-ID: 
</span><br>
<span class="quotelev1">&gt; &lt;ea86ce220808150908t62818a21k32c49b9b6f07dca_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1 Hi Terry (and others), I 
</span><br>
<span class="quotelev1">&gt; have previously explored this some on Linux/X86-64 and concluded that 
</span><br>
<span class="quotelev1">&gt; Open MPI needs to supply it's own memcpy routine to get good sm 
</span><br>
<span class="quotelev1">&gt; performance, since the memcpy supplied by glibc is not even close to 
</span><br>
<span class="quotelev1">&gt; optimal. We have an unused MCA framework already set up to supply an 
</span><br>
<span class="quotelev1">&gt; opal_memcpy. AFAIK, George and Brian did the original work to set up 
</span><br>
<span class="quotelev1">&gt; that framework. It has been on my to-do list for awhile to start 
</span><br>
<span class="quotelev1">&gt; implementing opal_memcpy components for the architectures I have 
</span><br>
<span class="quotelev1">&gt; access to, and to modify OMPI to actually use opal_memcpy where ti 
</span><br>
<span class="quotelev1">&gt; makes sense. Terry, I presume what you suggest could be dealt with 
</span><br>
<span class="quotelev1">&gt; similarly when we are running/building on SPARC. Any followup 
</span><br>
<span class="quotelev1">&gt; discussion on this should probably happen on the developer mailing 
</span><br>
<span class="quotelev1">&gt; list. On Thu, Aug 14, 2008 at 12:19 PM, Terry Dontje 
</span><br>
<span class="quotelev1">&gt; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Interestingly enough on the SPARC platform the Solaris memcpy's actually use
</span><br>
<span class="quotelev3">&gt;&gt; &gt; non-temporal stores for copies &gt;= 64KB.  By default some of the mca
</span><br>
<span class="quotelev3">&gt;&gt; &gt; parameters to the sm BTL stop at 32KB.  I've done experimentations of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; bumping the sm segment sizes to above 64K and seen incredible speedup on our
</span><br>
<span class="quotelev3">&gt;&gt; &gt; M9000 platforms.  I am looking for some nice way to integrate a memcpy that
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lowers this boundary to 32KB or lower into Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have not looked into whether Solaris x86/x64 memcpy's use the non-temporal
</span><br>
<span class="quotelev3">&gt;&gt; &gt; stores or not.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Message: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Date: Thu, 14 Aug 2008 09:28:59 -0400
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Subject: Re: [OMPI users] SM btl slows down bandwidth?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; To: rbbrigh_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Message-ID: &lt;562557EB-857C-4CA8-97AD-F294C7FEDC77_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; At this time, we are not using non-temporal stores for shared memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;  operations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; On Aug 13, 2008, at 11:46 AM, Ron Brightwell wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; [...]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; MPICH2 manages to get about 5GB/s in shared memory performance on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; Xeon 5420 system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; Does the sm btl use a memcpy with non-temporal stores like MPICH2?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; This can be a big win for bandwidth benchmarks that don't actually
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; touch their receive buffers at all...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; -Ron
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; -- Jeff Squyres Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a> 
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden] I'm a bright... 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4581.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Previous message:</strong> <a href="4579.php">Jeff Squyres: "[OMPI devel] DNS issues with open-mpi.org"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4581.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Reply:</strong> <a href="4581.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
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
