<?
$subject_val = "Re: [OMPI users] Basic Question about MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 09:53:25 2009" -->
<!-- isoreceived="20090526135325" -->
<!-- sent="Tue, 26 May 2009 09:53:14 -0400" -->
<!-- isosent="20090526135314" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Basic Question about MPI" -->
<!-- id="E9496B63-D422-4868-AF2C-276CC6F574F8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="afc7dbc60905252311i70edc320j6777205a61060856_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Basic Question about MPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 09:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9425.php">Gus Correa: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Previous message:</strong> <a href="9423.php">Le Duy Khanh: "[OMPI users] [Question] How does MPI map b/w processes and computere nodes ?"</a>
<li><strong>In reply to:</strong> <a href="9421.php">Charles Salvia: "[OMPI users] Basic Question about MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Keep in mind the difference between the MPI standard and  
<br>
implementations of that standard.  To be specific: Open MPI is one  
<br>
implementation of the MPI standard (see www.mpi-forum.org for the  
<br>
standard document, v2.1 is the latest version of that doc).
<br>
<p>Open MPI generally depends on finding your executable on the node  
<br>
where it is running.  This usually means specifying an absolute  
<br>
filename than can be exec'ed directly or a relative filename that can  
<br>
be found either with relation to the cwd or in the PATH.
<br>
<p>How this executable gets to the node to execute is a different  
<br>
question.  The executable may be located in a local filesystem or a  
<br>
networked filesystem (e.g., NFS).  Many cluster-based users of MPI  
<br>
with small-ish systems (~32-64 nodes) use an NFS server to make their  
<br>
executables visible on all nodes without the bother of manually  
<br>
copying executables between nodes.
<br>
<p>That being said, there are many scheduling/resource managing systems  
<br>
out there that will pre-stage executables (and other data files) to  
<br>
desired nodes before MPI tries to run them.  These are beyond (Open)  
<br>
MPI's scope -- from OMPI's perspective, we just find the executable in  
<br>
the PATH; it doesn't really matter to OMPI how it got there.
<br>
<p><p>On May 26, 2009, at 2:11 AM, Charles Salvia wrote:
<br>
<p><span class="quotelev1">&gt; I am very new to the concept of MPI, and have only recently begun  
</span><br>
<span class="quotelev1">&gt; researching it.  I have a very basic question about the way MPI works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How exactly does MPI distribute user-created applications (binary  
</span><br>
<span class="quotelev1">&gt; code) over a network?  Does it actually copy the binary into the  
</span><br>
<span class="quotelev1">&gt; local memory of each node, and execute it?  If so, doesn't this put  
</span><br>
<span class="quotelev1">&gt; serious restrictions on the heterogeneity of the network?  For  
</span><br>
<span class="quotelev1">&gt; example, in order to run a distributed application (compiled with  
</span><br>
<span class="quotelev1">&gt; gcc) over a typical Linux cluster, you'd need to make sure that each  
</span><br>
<span class="quotelev1">&gt; node has the same version of glibc, or there could be issues running  
</span><br>
<span class="quotelev1">&gt; the binary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any information would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9425.php">Gus Correa: "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Previous message:</strong> <a href="9423.php">Le Duy Khanh: "[OMPI users] [Question] How does MPI map b/w processes and computere nodes ?"</a>
<li><strong>In reply to:</strong> <a href="9421.php">Charles Salvia: "[OMPI users] Basic Question about MPI"</a>
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
