<?
$subject_val = "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 11:45:32 2008" -->
<!-- isoreceived="20080804154532" -->
<!-- sent="Mon, 04 Aug 2008 11:45:28 -0400" -->
<!-- isosent="20080804154528" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to specify hosts for MPI_Comm_spawn" -->
<!-- id="48972418.4060108_at_3db-labs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8DF59A84-32BE-4C06-AA6C-1CF97C17D3E1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to specify hosts for MPI_Comm_spawn<br>
<strong>From:</strong> Mark Borgerding (<em>markb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 11:45:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6265.php">Jeff Squyres: "Re: [OMPI users] MPI adopt-a-group: a question and status report"</a>
<li><strong>Previous message:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6266.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6266.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 4, 2008, at 10:02 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I *think* George Bosilca sent some sample code about this across one 
</span><br>
<span class="quotelev2">&gt;&gt; of the OMPI lists (users or devel) a long time ago.  I'm not 100% 
</span><br>
<span class="quotelev2">&gt;&gt; sure about that, though...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I unfortunately forget the trick that he used.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George is unable to send e-mail at the moment, but he asked me to send 
</span><br>
<span class="quotelev1">&gt; these links:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.lam-mpi.org/MailArchives/lam/2003/06/6226.php">http://www.lam-mpi.org/MailArchives/lam/2003/06/6226.php</a>
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2007/10/4327.php">http://www.open-mpi.org/community/lists/users/2007/10/4327.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And a simple example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2008/07/6168.php">http://www.open-mpi.org/community/lists/users/2008/07/6168.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thanks for all your help.
<br>
<p>I'm afraid I still could not make the simple example spawn work on 
<br>
remote hosts listed in host file.  Everything stays local. At least on 1.2.x
<br>
<p>But I think I've got a path forward.  I've been able to use sockets and 
<br>
MPI_Comm_join to create intercomms between the singleton and 
<br>
mpirun-spawned children.  The important step I was missing was
<br>
&quot;orted --persistent --seed --scope public&quot;.  Now the MPI_Comm_join calls 
<br>
in different worlds can see each other.  FWIW, this technique just works 
<br>
in LAM, presumably because lamboot is an explicit step.
<br>
<p>I've almost got my head wrapped around the technique in
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/10/4327.php">http://www.open-mpi.org/community/lists/users/2007/10/4327.php</a>
<br>
Are there any shortcuts I could take for the case where all the clients 
<br>
are already in a group?
<br>
<p><pre>
-- 
Mark Borgerding
3dB Labs, Inc
Innovate.  Develop.  Deliver.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6265.php">Jeff Squyres: "Re: [OMPI users] MPI adopt-a-group: a question and status report"</a>
<li><strong>Previous message:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="6263.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6266.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="6266.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
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
