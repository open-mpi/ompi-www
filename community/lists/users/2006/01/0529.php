<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 27 07:11:26 2006" -->
<!-- isoreceived="20060127121126" -->
<!-- sent="Fri, 27 Jan 2006 07:11:10 -0500" -->
<!-- isosent="20060127121110" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] ompi spec file" -->
<!-- id="96616ACA-F3E6-4397-B92E-AC27C869E4A4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060126215336.78305.qmail_at_web31508.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2006-01-27 07:11:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0530.php">Dave Hudak: "[O-MPI users] libtool error"</a>
<li><strong>Previous message:</strong> <a href="0528.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="0527.php">Jonathan Day: "Re: [O-MPI users] ompi spec file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2006, at 4:53 PM, Jonathan Day wrote:
<br>
<p><span class="quotelev1">&gt; In which case, the solution would seem to have a
</span><br>
<span class="quotelev1">&gt; metafile containing the flags, the environment
</span><br>
<span class="quotelev1">&gt; variable they set/unset, the default value and what
</span><br>
<span class="quotelev1">&gt; software is required, as a simple table.
</span><br>
<p>That might be possible, but it would be no small task.  Open MPI  
<br>
currently sports 85 (!) --with and --enable configure options.   
<br>
Revamping the configure system to put these off in a meta file  
<br>
somewhere would be an enormous task.  Indeed, somewhere around 10-20  
<br>
of these options are not directly added by Open MPI (e.g., they're  
<br>
added by Libtool).
<br>
<p>Also, because of the distributed nature of Open MPI's configure  
<br>
system (each component can supply its own configure.m4 script that is  
<br>
sucked into the top-level configure.ac file), each component can add  
<br>
its own --with/--enable options to the overall configure process.   
<br>
There is currently a fairly sophisticated autogen.sh script that  
<br>
trolls the tree to assemble the final configure.ac and run all the  
<br>
GNU tools in the Right order.  The intent here was to keep configure- 
<br>
specific information for each component at least somewhat local to  
<br>
that component.
<br>
<p>Finally, the default value is sometimes influenced by the result of a  
<br>
test that is run on the system.
<br>
<p>These are the reasons I see this as a pretty big task.  :-)
<br>
<p>No one commented on my other suggestion -- that the spec file provide  
<br>
the most common options (e.g., paths to high-speed interconnects),  
<br>
and a generic &quot;pass this string through to the configure argv&quot; option  
<br>
to catch all the rest (if you need one of the relatively uncommon  
<br>
options).
<br>
<p>This seemed to be a fairly low-cost approach, is scalable for the  
<br>
maintainers, and addresses the common cases for re-building an SRPM.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0530.php">Dave Hudak: "[O-MPI users] libtool error"</a>
<li><strong>Previous message:</strong> <a href="0528.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="0527.php">Jonathan Day: "Re: [O-MPI users] ompi spec file"</a>
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
