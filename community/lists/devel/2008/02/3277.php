<?
$subject_val = "Re: [OMPI devel] PLPA ready?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 10:02:03 2008" -->
<!-- isoreceived="20080221150203" -->
<!-- sent="Thu, 21 Feb 2008 17:01:48 +0200" -->
<!-- isosent="20080221150148" -->
<!-- name="Sharon Melamed" -->
<!-- email="sharonm135_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PLPA ready?" -->
<!-- id="000701c8749a$b088a570$710519ac_at_voltaire.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A7C825BD-BFA8-4EE8-BD07-A75C6F95D09D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PLPA ready?<br>
<strong>From:</strong> Sharon Melamed (<em>sharonm135_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 10:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3278.php">Lenny Verkhovsky: "[OMPI devel] rch-step2 branch errors"</a>
<li><strong>Previous message:</strong> <a href="3276.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3276.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>1. Yes, I need both parameters when querying socket and cores.
<br>
2. I don't think that sun will concern if we will change the
<br>
get_processor/socket/core_info because as Pak Lui from Sun said in one of
<br>
his early emails &quot;I am guessing it will not messing us up because these are
<br>
the functions that Solaris doesn't really implement yet, right?&quot;
<br>
<p><p>Sharon.  
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Thursday, February 21, 2008 4:18 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] PLPA ready?
<br>
<p>On Feb 20, 2008, at 7:53 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I guess I was torn between reporting num_processors/sockets and
</span><br>
<span class="quotelev2">&gt;&gt; max_socket|core_id.  Really, you need both, right?  It is possible
</span><br>
<span class="quotelev2">&gt;&gt; that the number of processors and/or sockets are not contiguous.
</span><br>
<span class="quotelev1">&gt; I need both *because* the number of processor is not contiguous. In my
</span><br>
<span class="quotelev1">&gt; case, I have a machine with two sockets. the socket numbers are 0 and
</span><br>
<span class="quotelev1">&gt; 3. so in num_sockets I have 2 and in max_socket_id I have 3 and I need
</span><br>
<span class="quotelev1">&gt; those both values.
</span><br>
<p>Ok, so it sounds like a paffinity API change is in order.  When/if the  
<br>
Solaris plugin comes into effect, I know that they have similar issues  
<br>
(processors may not be numbered contiguously).
<br>
<p>Do you want to change the API to include both parameters when querying  
<br>
sockets and cores?  The Solaris API has these functions, but they're  
<br>
no-ops (returning NOT_SUPPORTED), but we'll need to make their  
<br>
prototypes match.
<br>
<p>I think PLPA otherwise passes criteria for release.  I'll release PLPA  
<br>
v1.1 today and try to get it integrated into the trunk.  Sorry it's  
<br>
taken a while...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3278.php">Lenny Verkhovsky: "[OMPI devel] rch-step2 branch errors"</a>
<li><strong>Previous message:</strong> <a href="3276.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>In reply to:</strong> <a href="3276.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
<li><strong>Reply:</strong> <a href="3281.php">Jeff Squyres: "Re: [OMPI devel] PLPA ready?"</a>
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
