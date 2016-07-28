<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 07:56:54 2007" -->
<!-- isoreceived="20070404115654" -->
<!-- sent="Wed, 4 Apr 2007 07:56:24 -0400" -->
<!-- isosent="20070404115624" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level" -->
<!-- id="7D64A04F-B214-4A8F-A8BC-28DEF938C8FA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1175627255.4371.23.camel_at_exponential.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 07:56:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1399.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1397.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1396.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 3, 2007, at 3:07 PM, Li-Ta Lo wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Well, that's a good question. At the moment, the only environments  
</span><br>
<span class="quotelev2">&gt;&gt; where we
</span><br>
<span class="quotelev2">&gt;&gt; encounter multiple cores treat each core as a separate &quot;slot&quot; when  
</span><br>
<span class="quotelev2">&gt;&gt; they
</span><br>
<span class="quotelev2">&gt;&gt; assign resources. We don't currently provide an option that says  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;map by
</span><br>
<span class="quotelev2">&gt;&gt; two&quot;, so the only way to do what you describe would be to manually  
</span><br>
<span class="quotelev2">&gt;&gt; specify
</span><br>
<span class="quotelev2">&gt;&gt; the mapping, slot by slot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also don't understand how Paffinity work for this case. When orted
</span><br>
<span class="quotelev1">&gt; launch N processes on a node, does it have control on how those
</span><br>
<span class="quotelev1">&gt; processes are started and mapped to the core/processor? Or is it
</span><br>
<span class="quotelev1">&gt; the case that O.S. puts the process on whatever cores it picks and
</span><br>
<span class="quotelev1">&gt; the paffinity module will try to &quot;pin&quot; the process on the core (picked
</span><br>
<span class="quotelev1">&gt; by O.S.)?
</span><br>
<p>Check out these 3 FAQ entries:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#paffinity-defs">http://www.open-mpi.org/faq/?category=tuning#paffinity-defs</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#maffinity-defs">http://www.open-mpi.org/faq/?category=tuning#maffinity-defs</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
<br>
<p>We *only* have 1 lame way of doing paffinity right now -- we start  
<br>
pinning processes to processors starting with processor ID 0.
<br>
<p><span class="quotelev2">&gt;&gt; If someone cares to suggest some alternative notation/option for  
</span><br>
<span class="quotelev2">&gt;&gt; requesting
</span><br>
<span class="quotelev2">&gt;&gt; that kind of mapping flexibility, I'm certainly willing to  
</span><br>
<span class="quotelev2">&gt;&gt; implement it (it
</span><br>
<span class="quotelev2">&gt;&gt; would be rather trivial to do &quot;map by N&quot;, but might be more  
</span><br>
<span class="quotelev2">&gt;&gt; complicated if
</span><br>
<span class="quotelev2">&gt;&gt; you want other things).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the current syntax of the config file/command line? Can we do
</span><br>
<span class="quotelev1">&gt; something like array index in those script languages e.g. [0:N:2]?
</span><br>
<span class="quotelev1">&gt; mailman/listinfo.cgi/devel
</span><br>
<p>There is no syntax for the command line -- this is a discussion that  
<br>
we developers have gotten into deadlock over several times.  It's a  
<br>
problem that we'd like to solve, but every time we talk about it, we  
<br>
deadlock and then move on to other higher-priority items.  :-\
<br>
<p>I take it to mean that &quot;[0:N:2]&quot; (ditching the [] would probably be  
<br>
good, because those would need to be escaped on the command line --  
<br>
probably &quot;--paffinity 0:N:2&quot; or something would be sufficient) would  
<br>
be &quot;start with core 0, end with core N, and step by 2 cores&quot;.  Right?
<br>
<p>This is fine, and similar things have been suggested before.  The  
<br>
problem with it is when you want to specify by socket, and not by  
<br>
core.  Additionally, there can be an ambiguity in Linux -- core 0 is  
<br>
always the first core on the first socket.  But where is core 1?  It  
<br>
could be the 2nd core on the 1st socket, or it could be the 1st core  
<br>
on the 2nd socket -- it depends on BIOS settings (IIRC).   
<br>
Additionally, Solaris processor ID number does not necessarily start  
<br>
with 0, nor is it necessarily contiguous.
<br>
<p>So we probably need an OMPI-specific syntax that specifically calls  
<br>
out cores and sockets and doesn't rely on making assumptions about  
<br>
the underlying numbering/labeling (analogous to LAM's C/N notation).
<br>
<p>But then the problem gets even harder, because we need to also mix  
<br>
this in with slots and nodes.  I.e., what does --byslot and --bynode  
<br>
mean in conjunction with this syntax?  Should they be illegal?
<br>
<p>How can you specify a sequence of specific cores where you want  
<br>
processes to go if they're in an irregular pattern?
<br>
<p>What does it mean to oversubscribe in these scenarios?
<br>
<p>...these are some of the questions that we would debate about.  We  
<br>
haven't really found a good syntax that answers all of them.  Galen  
<br>
Shipman had a promising syntax at one point, but I've lost the specs  
<br>
of it...  If you wander down to his office, he might be able to dig  
<br>
it up for you...?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1399.php">Jeff Squyres: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1397.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>In reply to:</strong> <a href="1396.php">Li-Ta Lo: "Re: [OMPI devel] Is it possible to get BTL transport work directly	with MPI level"</a>
<!-- nextthread="start" -->
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
