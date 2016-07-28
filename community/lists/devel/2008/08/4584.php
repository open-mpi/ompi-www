<?
$subject_val = "Re: [OMPI devel] memcpy MCA framework";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 17 21:16:33 2008" -->
<!-- isoreceived="20080818011633" -->
<!-- sent="Sun, 17 Aug 2008 21:16:29 -0400" -->
<!-- isosent="20080818011629" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memcpy MCA framework" -->
<!-- id="4B5ED2F6-B70E-49C4-928F-D3511239FC97_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7E96D1E6-39EA-472F-8D63-17037CC56E0A_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-17 21:16:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4585.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Previous message:</strong> <a href="4583.php">Jeff Squyres: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>In reply to:</strong> <a href="4583.php">Jeff Squyres: "Re: [OMPI devel] memcpy MCA framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4585.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Reply:</strong> <a href="4585.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I obviously won't be in Dublin (I'll be in a fishing boat in the  
<br>
middle of nowhere Canada -- much better), so I'm going to chime in now.
<br>
<p>The m4 part actually isn't too bad and is pretty simple.  I'm not sure  
<br>
other than looking at some variables set by ompi_config_asm that there  
<br>
is much to check.  The hard parts are dealing with the finer grained  
<br>
instruction set requirements.
<br>
<p>On x86 in particular, many of the operations in the memcpy are part of  
<br>
SSE, SSE2, or SSE3.  Currently, we don't have any finer concept of a  
<br>
processor than x86 and most compilers target an instruction set that  
<br>
will run on anything considered 686, which is almost everything out  
<br>
there.  We'd have to decide how to handle instruction streams which  
<br>
are no longer going to work on every chip.  Since we know we have a  
<br>
number of users with heterogeneous x86 clusters, this is something to  
<br>
think about.
<br>
<p>Brian
<br>
<p>On Aug 17, 2008, at 7:57 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Let's talk about this in Dublin.  I can probably help with the m4  
</span><br>
<span class="quotelev1">&gt; magic, but I need to understand exactly what needs to be done first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2008, at 11:51 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The intent of the memcpy framework is to allow a selection between  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; several memcpy at runtime. Of course, there will be a preselection  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at compile time, but all versions that can compile on a given  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; architecture will be benchmarked at runtime and the best one will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be selected. There is a file with several versions of memcpy for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x86 (32 and 64) somewhere around (I should have one if  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interested), that can be used as a starting point.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, I guess I need to look at this code.  I wonder if there may be  
</span><br>
<span class="quotelev2">&gt;&gt; cases for Sun's machines in which this benchmark could end up  
</span><br>
<span class="quotelev2">&gt;&gt; picking the wrong memcpy?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only thing we need is a volunteer to build the m4 magic.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Figuring out what we can compile if kind of tricky, as some of the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions are in assembly, some others in C, and some others a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mixture (the MMX headers).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Isn't the atomic code very similar?  If I get to this point before  
</span><br>
<span class="quotelev2">&gt;&gt; anyone else I probably will volunteer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 16, 2008, at 3:19 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Tim,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for bringing the below up and asking for a redirection to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the devel list.  I think looking/using the MCA memcpy framework  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would be a good thing to do and maybe we can work on this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; together once I get out from under some commitments.  However,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some of the challenges that originally scared me away from  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; looking at the memcpy MCA is whether we really want all the OMPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memcpy's to be replaced or just specific ones.  Also, I was  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; concerned on trying to figure out which version of memcpy I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should be using.  I believe currently things are done such that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you get one version based on which system you compile on.  For  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sun there may be several different SPARC platforms that would  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need to use different memcpy code but we would like to just ship  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one set of bits.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not saying the above not doable under the memcpy MCA framework  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just that it somewhat scared me away from thinking about it at  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first glance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: Fri, 15 Aug 2008 12:08:18 -0400 From: &quot;Tim Mattox&quot; &lt;timattox_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Subject: Re: [OMPI users] SM btl slows down bandwidth? To:  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt; Message-ID: &lt;ea86ce220808150908t62818a21k32c49b9b6f07dca_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Content-Type: text/plain; charset=ISO-8859-1 Hi Terry (and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; others), I have previously explored this some on Linux/X86-64  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and concluded that Open MPI needs to supply it's own memcpy  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; routine to get good sm performance, since the memcpy supplied by  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; glibc is not even close to optimal. We have an unused MCA  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; framework already set up to supply an opal_memcpy. AFAIK, George  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and Brian did the original work to set up that framework. It has  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; been on my to-do list for awhile to start implementing  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_memcpy components for the architectures I have access to,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and to modify OMPI to actually use opal_memcpy where ti makes  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sense. Terry, I presume what you suggest could be dealt with  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; similarly when we are running/building on SPARC. Any followup  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; discussion on this should probably happen on the developer  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mailing list. On Thu, Aug 14, 2008 at 12:19 PM, Terry Dontje &lt;Terry.Dontje_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; Interestingly enough on the SPARC platform the Solaris  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; memcpy's actually use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; non-temporal stores for copies &gt;= 64KB.  By default some of  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; parameters to the sm BTL stop at 32KB.  I've done  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; experimentations of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; bumping the sm segment sizes to above 64K and seen incredible  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; speedup on our
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; M9000 platforms.  I am looking for some nice way to integrate  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a memcpy that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; lowers this boundary to 32KB or lower into Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; I have not looked into whether Solaris x86/x64 memcpy's use  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the non-temporal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; stores or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; Message: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; Date: Thu, 14 Aug 2008 09:28:59 -0400
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; Subject: Re: [OMPI users] SM btl slows down bandwidth?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; To: rbbrigh_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; Message-ID: &lt;562557EB-857C-4CA8-97AD-F294C7FEDC77_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; delsp=yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; At this time, we are not using non-temporal stores for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; shared memory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;  operations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; On Aug 13, 2008, at 11:46 AM, Ron Brightwell wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; [...]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; MPICH2 manages to get about 5GB/s in shared memory  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; performance on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt; &gt;&gt; Xeon 5420 system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; Does the sm btl use a memcpy with non-temporal stores  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; like MPICH2?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; This can be a big win for bandwidth benchmarks that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; don't actually
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; touch their receive buffers at all...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; -Ron
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt; -- Jeff Squyres Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a> tmattox_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  || timattox_at_[hidden] I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="4585.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Previous message:</strong> <a href="4583.php">Jeff Squyres: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>In reply to:</strong> <a href="4583.php">Jeff Squyres: "Re: [OMPI devel] memcpy MCA framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4585.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
<li><strong>Reply:</strong> <a href="4585.php">George Bosilca: "Re: [OMPI devel] memcpy MCA framework"</a>
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
