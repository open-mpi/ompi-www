<?
$subject_val = "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 02:15:26 2008" -->
<!-- isoreceived="20080804061526" -->
<!-- sent="Mon, 4 Aug 2008 09:15:16 +0300" -->
<!-- isosent="20080804061516" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TRUNK error ( MAN page ) since r19120" -->
<!-- id="453d39990808032315r9df4198s855ae37fee3d0031_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="14645DD4-A8A4-4156-83E3-ADE3C13AFBCE_at_cisco.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 02:15:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4512.php">Kiril Dichev: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4510.php">Lenny Verkhovsky: "[OMPI devel] new Open MPI team member"</a>
<li><strong>In reply to:</strong> <a href="4509.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4512.php">Kiril Dichev: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4512.php">Kiril Dichev: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4515.php">Tim Mattox: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
automake (GNU automake) 1.10
<br>
<p>autoconf (GNU Autoconf) 2.61
<br>
<p>ltmain.sh (GNU libtool) 1.5.24 (1.1220.2.455 2007/06/24 02:13:29)
<br>
<p><p>On 8/3/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of the GNU auto tools are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 3, 2008, at 9:42 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I downloaded from the trunk,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure .....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make all install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; config.log attached
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8/3/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: We are not seeing
</span><br>
<span class="quotelev2">&gt;&gt; this error; can you please send all the required info?  This is not enough
</span><br>
<span class="quotelev2">&gt;&gt; info to diagnose why you are seeing it and we are not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 3, 2008, at 8:53 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I experience this error since r19120
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #make all install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ( a lot of output )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; creating libmpi.la
</span><br>
<span class="quotelev2">&gt;&gt; (cd .libs &amp;&amp; rm -f libmpi.la &amp;&amp; ln -s ../libmpi.la libmpi.la)
</span><br>
<span class="quotelev2">&gt;&gt; Creating mpi/man/man3/MPI.3 man page...
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh: mpi/man/man3/MPI.3: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [mpi/man/man3/MPI.3] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/build/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/build/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; p.s. of course I  run autogen and configure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** WARNING:  This email contains an attachment of a very suspicious type.
</span><br>
<span class="quotelev2">&gt;&gt;  **
</span><br>
<span class="quotelev2">&gt;&gt; ** You are urged NOT to open this attachment unless you are absolutely
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** damage to your computer and your files.  If you have any questions
</span><br>
<span class="quotelev2">&gt;&gt;  **
</span><br>
<span class="quotelev2">&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT.
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.
</span><br>
<span class="quotelev2">&gt;&gt; **
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.zip&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4511/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4512.php">Kiril Dichev: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4510.php">Lenny Verkhovsky: "[OMPI devel] new Open MPI team member"</a>
<li><strong>In reply to:</strong> <a href="4509.php">Jeff Squyres: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4512.php">Kiril Dichev: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4512.php">Kiril Dichev: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4515.php">Tim Mattox: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
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
