<?
$subject_val = "Re: [OMPI devel] memcpy MCA framework";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 11:51:08 2008" -->
<!-- isoreceived="20080816155108" -->
<!-- sent="Sat, 16 Aug 2008 11:51:02 -0400" -->
<!-- isosent="20080816155102" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memcpy MCA framework" -->
<!-- id="48A6F766.30009_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E3498AD3-A4E3-47F7-BD2E-EB7BC7801118_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memcpy MCA framework<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 11:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4583.php">Jeff Squyres: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Previous message:</strong> <a href="4581.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>In reply to:</strong> <a href="4581.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4583.php">Jeff Squyres: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Reply:</strong> <a href="4583.php">Jeff Squyres: "Re: [OMPI devel] memcpy MCA framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The intent of the memcpy framework is to allow a selection between 
</span><br>
<span class="quotelev1">&gt; several memcpy at runtime. Of course, there will be a preselection at 
</span><br>
<span class="quotelev1">&gt; compile time, but all versions that can compile on a given 
</span><br>
<span class="quotelev1">&gt; architecture will be benchmarked at runtime and the best one will be 
</span><br>
<span class="quotelev1">&gt; selected. There is a file with several versions of memcpy for x86 (32 
</span><br>
<span class="quotelev1">&gt; and 64) somewhere around (I should have one if interested), that can 
</span><br>
<span class="quotelev1">&gt; be used as a starting point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ok, I guess I need to look at this code.  I wonder if there may be cases 
<br>
for Sun's machines in which this benchmark could end up picking the 
<br>
wrong memcpy?
<br>
<span class="quotelev1">&gt; The only thing we need is a volunteer to build the m4 magic. Figuring 
</span><br>
<span class="quotelev1">&gt; out what we can compile if kind of tricky, as some of the functions 
</span><br>
<span class="quotelev1">&gt; are in assembly, some others in C, and some others a mixture (the MMX 
</span><br>
<span class="quotelev1">&gt; headers).
</span><br>
<span class="quotelev1">&gt;
</span><br>
Isn't the atomic code very similar?  If I get to this point before 
<br>
anyone else I probably will volunteer.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2008, at 3:19 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Tim,
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for bringing the below up and asking for a redirection to the 
</span><br>
<span class="quotelev2">&gt;&gt; devel list.  I think looking/using the MCA memcpy framework would be 
</span><br>
<span class="quotelev2">&gt;&gt; a good thing to do and maybe we can work on this together once I get 
</span><br>
<span class="quotelev2">&gt;&gt; out from under some commitments.  However, some of the challenges 
</span><br>
<span class="quotelev2">&gt;&gt; that originally scared me away from looking at the memcpy MCA is 
</span><br>
<span class="quotelev2">&gt;&gt; whether we really want all the OMPI memcpy's to be replaced or just 
</span><br>
<span class="quotelev2">&gt;&gt; specific ones.  Also, I was concerned on trying to figure out which 
</span><br>
<span class="quotelev2">&gt;&gt; version of memcpy I should be using.  I believe currently things are 
</span><br>
<span class="quotelev2">&gt;&gt; done such that you get one version based on which system you compile 
</span><br>
<span class="quotelev2">&gt;&gt; on.  For Sun there may be several different SPARC platforms that 
</span><br>
<span class="quotelev2">&gt;&gt; would need to use different memcpy code but we would like to just 
</span><br>
<span class="quotelev2">&gt;&gt; ship one set of bits.
</span><br>
<span class="quotelev2">&gt;&gt; Not saying the above not doable under the memcpy MCA framework just 
</span><br>
<span class="quotelev2">&gt;&gt; that it somewhat scared me away from thinking about it at first glance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Fri, 15 Aug 2008 12:08:18 -0400 From: &quot;Tim Mattox&quot; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;timattox_at_[hidden]&gt; Subject: Re: [OMPI users] SM btl slows down 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bandwidth? To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt; Message-ID: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ea86ce220808150908t62818a21k32c49b9b6f07dca_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1 Hi Terry (and others), 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have previously explored this some on Linux/X86-64 and concluded 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that Open MPI needs to supply it's own memcpy routine to get good sm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance, since the memcpy supplied by glibc is not even close to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimal. We have an unused MCA framework already set up to supply an 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_memcpy. AFAIK, George and Brian did the original work to set up 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that framework. It has been on my to-do list for awhile to start 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementing opal_memcpy components for the architectures I have 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; access to, and to modify OMPI to actually use opal_memcpy where ti 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; makes sense. Terry, I presume what you suggest could be dealt with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; similarly when we are running/building on SPARC. Any followup 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; discussion on this should probably happen on the developer mailing 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list. On Thu, Aug 14, 2008 at 12:19 PM, Terry Dontje 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Interestingly enough on the SPARC platform the Solaris memcpy's 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; actually use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; non-temporal stores for copies &gt;= 64KB.  By default some of the mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; parameters to the sm BTL stop at 32KB.  I've done 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; experimentations of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; bumping the sm segment sizes to above 64K and seen incredible 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; speedup on our
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; M9000 platforms.  I am looking for some nice way to integrate a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memcpy that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; lowers this boundary to 32KB or lower into Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I have not looked into whether Solaris x86/x64 memcpy's use the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; non-temporal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; stores or not.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; Message: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; Date: Thu, 14 Aug 2008 09:28:59 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; Subject: Re: [OMPI users] SM btl slows down bandwidth?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; To: rbbrigh_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; Message-ID: &lt;562557EB-857C-4CA8-97AD-F294C7FEDC77_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; delsp=yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; At this time, we are not using non-temporal stores for shared 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt;  operations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; On Aug 13, 2008, at 11:46 AM, Ron Brightwell wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; MPICH2 manages to get about 5GB/s in shared memory 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; performance on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; Xeon 5420 system.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; Does the sm btl use a memcpy with non-temporal stores like 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPICH2?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; This can be a big win for bandwidth benchmarks that don't 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; touch their receive buffers at all...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; -Ron
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt; &gt;&gt; -- Jeff Squyres Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden] I'm a bright... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4583.php">Jeff Squyres: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Previous message:</strong> <a href="4581.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>In reply to:</strong> <a href="4581.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4583.php">Jeff Squyres: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Reply:</strong> <a href="4583.php">Jeff Squyres: "Re: [OMPI devel] memcpy MCA framework"</a>
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
