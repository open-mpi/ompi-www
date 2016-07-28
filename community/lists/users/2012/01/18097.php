<?
$subject_val = "Re: [OMPI users] Can we avoid derived datatypes?: Update!";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  5 08:16:57 2012" -->
<!-- isoreceived="20120105131657" -->
<!-- sent="Thu, 5 Jan 2012 08:16:52 -0500" -->
<!-- isosent="20120105131652" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can we avoid derived datatypes?: Update!" -->
<!-- id="C7A4D0BB-4BC0-4A23-BE01-E769997255DA_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1325759714.44380.YahooMailNeo_at_web29605.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can we avoid derived datatypes?: Update!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-05 08:16:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18098.php">devendra rai: "[OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Previous message:</strong> <a href="18096.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?: Update!"</a>
<li><strong>In reply to:</strong> <a href="18096.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?: Update!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 5, 2012, at 5:35 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; In general, we cannot assume portability of sending a C/C++ struct as a stream of bytes. There must be a promise that data representation on machines involved in the transmission must perform the same data layout. 
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; I have a function that commits the new datatype: Add_New_MPITypes(). This is called just after MPI_Init(...).
</span><br>
<span class="quotelev1">&gt; After a few subsequent function calls, I am doing MPI-Send/Receive in another function, which looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void sendMessagetoSlave(void* Payload, int MESSAGETYPE)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     switch (MESSAGETYPE)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;     case MSGINSTALLP:
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;         //Add_MPI_msgInstallP_Type(); /*Was already done in Add_New_MPITypes() */
</span><br>
<span class="quotelev1">&gt;         msgInstallP InstallPMessage;
</span><br>
<span class="quotelev1">&gt;         InstallPMessage = *(msgInstallP*)Payload;
</span><br>
<span class="quotelev1">&gt;         MPI_Ssend(
</span><br>
<span class="quotelev1">&gt;                   (void*)Payload,                       /* Payload */
</span><br>
<span class="quotelev1">&gt;                   sizeof(msgInstallP),                 /* size of the payload */
</span><br>
<span class="quotelev1">&gt;                   MPI_MSGINSTALLP,                      /* MPI Data type */
</span><br>
<span class="quotelev1">&gt;                   InstallPMessage.location,             /* location to which the message is being sent */
</span><br>
<span class="quotelev1">&gt;                   MASTERSLAVECONTROLMESSAGE,            /* Tag */
</span><br>
<span class="quotelev1">&gt;                   MPI_COMM_WORLD                        /* Communicator */
</span><br>
<span class="quotelev1">&gt;                   );
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       break;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     default:
</span><br>
<span class="quotelev1">&gt;       break;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The linker complains that it does not know MPI_MSGINSTALLP derived datatype. Specifically, the message from the linker is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;&#145;MPI_MSGINSTALLP&#146; was not declared in this scope&quot;.
</span><br>
<p>This sounds like another C++ programming error, and not an MPI-specific error.
<br>
<p>I'll answer this one, but please know that this list is intended for Open MPI-specific questions, or questions about MPI in general, not general C/C++ programming help.
<br>
<p>The issue is where MPI_MSGINSTALLP is prototyped, and where it is &quot;visible&quot;.  In this case, it sounds like MPI_MSGINSTALLP is declared in another function somewhere else, or is otherwise not either globally visible or visible in the namespace where sendMessagetoSlave() resides.  Hence, when the compiler compiles sendMessagetoSlave, it has no idea what the symbol MPI_MSGINSTALLP is.  It's like this:
<br>
<p>void foo() {
<br>
&nbsp;&nbsp;int i;
<br>
}
<br>
<p>void bar() {
<br>
&nbsp;&nbsp;// can't use &quot;i&quot; here because &quot;i&quot; lives in foo(), and bar() has 
<br>
&nbsp;&nbsp;// no idea what &quot;i&quot; is
<br>
}
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18098.php">devendra rai: "[OMPI users] Strange Segfault in mpirun: orterun.c:486"</a>
<li><strong>Previous message:</strong> <a href="18096.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?: Update!"</a>
<li><strong>In reply to:</strong> <a href="18096.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?: Update!"</a>
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
