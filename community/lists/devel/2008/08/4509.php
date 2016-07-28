<?
$subject_val = "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 12:12:31 2008" -->
<!-- isoreceived="20080803161231" -->
<!-- sent="Sun, 3 Aug 2008 12:12:21 -0400" -->
<!-- isosent="20080803161221" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TRUNK error ( MAN page ) since r19120" -->
<!-- id="14645DD4-A8A4-4156-83E3-ADE3C13AFBCE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990808030642o765bb939tc1c79a29825cddba_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] TRUNK error ( MAN page ) since r19120<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-03 12:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4510.php">Lenny Verkhovsky: "[OMPI devel] new Open MPI team member"</a>
<li><strong>Previous message:</strong> <a href="4508.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4508.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4511.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4511.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of the GNU auto tools are you using?
<br>
<p>On Aug 3, 2008, at 9:42 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; I downloaded from the trunk,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./autogen.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure .....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; config.log attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/3/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: We are not  
</span><br>
<span class="quotelev1">&gt; seeing this error; can you please send all the required info?  This  
</span><br>
<span class="quotelev1">&gt; is not enough info to diagnose why you are seeing it and we are not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2008, at 8:53 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I experience this error since r19120
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ( a lot of output )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; creating libmpi.la
</span><br>
<span class="quotelev1">&gt; (cd .libs &amp;&amp; rm -f libmpi.la &amp;&amp; ln -s ../libmpi.la libmpi.la)
</span><br>
<span class="quotelev1">&gt; Creating mpi/man/man3/MPI.3 man page...
</span><br>
<span class="quotelev1">&gt; /bin/sh: mpi/man/man3/MPI.3: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi/man/man3/MPI.3] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/USERS/lenny/OMPI_ORTE_CODE/ompi- 
</span><br>
<span class="quotelev1">&gt; trunk_19120/build/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/USERS/lenny/OMPI_ORTE_CODE/ompi- 
</span><br>
<span class="quotelev1">&gt; trunk_19120/build/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; p.s. of course I  run autogen and configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny.
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
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious  
</span><br>
<span class="quotelev1">&gt; type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are  
</span><br>
<span class="quotelev1">&gt; absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause  
</span><br>
<span class="quotelev1">&gt; irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any  
</span><br>
<span class="quotelev1">&gt; questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE  
</span><br>
<span class="quotelev1">&gt; OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail  
</span><br>
<span class="quotelev1">&gt; scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.zip&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4510.php">Lenny Verkhovsky: "[OMPI devel] new Open MPI team member"</a>
<li><strong>Previous message:</strong> <a href="4508.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4508.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4511.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4511.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
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
