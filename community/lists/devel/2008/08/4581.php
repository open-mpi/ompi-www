<?
$subject_val = "Re: [OMPI devel] memcpy MCA framework";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 10:22:40 2008" -->
<!-- isoreceived="20080816142240" -->
<!-- sent="Sat, 16 Aug 2008 16:22:26 +0200" -->
<!-- isosent="20080816142226" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memcpy MCA framework" -->
<!-- id="E3498AD3-A4E3-47F7-BD2E-EB7BC7801118_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48A6D3D5.6050606_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 10:22:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4582.php">Terry Dontje: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Previous message:</strong> <a href="4580.php">Terry Dontje: "[OMPI devel] memcpy MCA framework"</a>
<li><strong>In reply to:</strong> <a href="4580.php">Terry Dontje: "[OMPI devel] memcpy MCA framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4582.php">Terry Dontje: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Reply:</strong> <a href="4582.php">Terry Dontje: "Re: [OMPI devel] memcpy MCA framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The intent of the memcpy framework is to allow a selection between  
<br>
several memcpy at runtime. Of course, there will be a preselection at  
<br>
compile time, but all versions that can compile on a given  
<br>
architecture will be benchmarked at runtime and the best one will be  
<br>
selected. There is a file with several versions of memcpy for x86 (32  
<br>
and 64) somewhere around (I should have one if interested), that can  
<br>
be used as a starting point.
<br>
<p>The only thing we need is a volunteer to build the m4 magic. Figuring  
<br>
out what we can compile if kind of tricky, as some of the functions  
<br>
are in assembly, some others in C, and some others a mixture (the MMX  
<br>
headers).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 16, 2008, at 3:19 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Hi Tim,
</span><br>
<span class="quotelev1">&gt; Thanks for bringing the below up and asking for a redirection to the  
</span><br>
<span class="quotelev1">&gt; devel list.  I think looking/using the MCA memcpy framework would be  
</span><br>
<span class="quotelev1">&gt; a good thing to do and maybe we can work on this together once I get  
</span><br>
<span class="quotelev1">&gt; out from under some commitments.  However, some of the challenges  
</span><br>
<span class="quotelev1">&gt; that originally scared me away from looking at the memcpy MCA is  
</span><br>
<span class="quotelev1">&gt; whether we really want all the OMPI memcpy's to be replaced or just  
</span><br>
<span class="quotelev1">&gt; specific ones.  Also, I was concerned on trying to figure out which  
</span><br>
<span class="quotelev1">&gt; version of memcpy I should be using.  I believe currently things are  
</span><br>
<span class="quotelev1">&gt; done such that you get one version based on which system you compile  
</span><br>
<span class="quotelev1">&gt; on.  For Sun there may be several different SPARC platforms that  
</span><br>
<span class="quotelev1">&gt; would need to use different memcpy code but we would like to just  
</span><br>
<span class="quotelev1">&gt; ship one set of bits.
</span><br>
<span class="quotelev1">&gt; Not saying the above not doable under the memcpy MCA framework just  
</span><br>
<span class="quotelev1">&gt; that it somewhat scared me away from thinking about it at first  
</span><br>
<span class="quotelev1">&gt; glance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 15 Aug 2008 12:08:18 -0400 From: &quot;Tim Mattox&quot; &lt;timattox_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subject: Re: [OMPI users] SM btl slows down bandwidth? To: &quot;Open  
</span><br>
<span class="quotelev2">&gt;&gt; MPI Users&quot; &lt;users_at_[hidden]&gt; Message-ID: &lt;ea86ce220808150908t62818a21k32c49b9b6f07dca_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Content-Type: text/plain; charset=ISO-8859-1 Hi Terry (and  
</span><br>
<span class="quotelev2">&gt;&gt; others), I have previously explored this some on Linux/X86-64 and  
</span><br>
<span class="quotelev2">&gt;&gt; concluded that Open MPI needs to supply it's own memcpy routine to  
</span><br>
<span class="quotelev2">&gt;&gt; get good sm performance, since the memcpy supplied by glibc is not  
</span><br>
<span class="quotelev2">&gt;&gt; even close to optimal. We have an unused MCA framework already set  
</span><br>
<span class="quotelev2">&gt;&gt; up to supply an opal_memcpy. AFAIK, George and Brian did the  
</span><br>
<span class="quotelev2">&gt;&gt; original work to set up that framework. It has been on my to-do  
</span><br>
<span class="quotelev2">&gt;&gt; list for awhile to start implementing opal_memcpy components for  
</span><br>
<span class="quotelev2">&gt;&gt; the architectures I have access to, and to modify OMPI to actually  
</span><br>
<span class="quotelev2">&gt;&gt; use opal_memcpy where ti makes sense. Terry, I presume what you  
</span><br>
<span class="quotelev2">&gt;&gt; suggest could be dealt with similarly when we are running/building  
</span><br>
<span class="quotelev2">&gt;&gt; on SPARC. Any followup discussion on this should probably happen on  
</span><br>
<span class="quotelev2">&gt;&gt; the developer mailing list. On Thu, Aug 14, 2008 at 12:19 PM, Terry  
</span><br>
<span class="quotelev2">&gt;&gt; Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Interestingly enough on the SPARC platform the Solaris memcpy's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually use
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; non-temporal stores for copies &gt;= 64KB.  By default some of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; parameters to the sm BTL stop at 32KB.  I've done  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; experimentations of
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; bumping the sm segment sizes to above 64K and seen incredible  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; speedup on our
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; M9000 platforms.  I am looking for some nice way to integrate a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memcpy that
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; lowers this boundary to 32KB or lower into Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I have not looked into whether Solaris x86/x64 memcpy's use the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-temporal
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; stores or not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Date: Thu, 14 Aug 2008 09:28:59 -0400
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Subject: Re: [OMPI users] SM btl slows down bandwidth?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; To: rbbrigh_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Message-ID: &lt;562557EB-857C-4CA8-97AD-F294C7FEDC77_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; At this time, we are not using non-temporal stores for shared  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;  operations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; On Aug 13, 2008, at 11:46 AM, Ron Brightwell wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; MPICH2 manages to get about 5GB/s in shared memory  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; performance on the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; Xeon 5420 system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; Does the sm btl use a memcpy with non-temporal stores  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; like MPICH2?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; This can be a big win for bandwidth benchmarks that don't  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; actually
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; touch their receive buffers at all...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; -Ron
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; -- Jeff Squyres Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a> tmattox_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;  || timattox_at_[hidden] I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4581/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4582.php">Terry Dontje: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Previous message:</strong> <a href="4580.php">Terry Dontje: "[OMPI devel] memcpy MCA framework"</a>
<li><strong>In reply to:</strong> <a href="4580.php">Terry Dontje: "[OMPI devel] memcpy MCA framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4582.php">Terry Dontje: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Reply:</strong> <a href="4582.php">Terry Dontje: "Re: [OMPI devel] memcpy MCA framework"</a>
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
