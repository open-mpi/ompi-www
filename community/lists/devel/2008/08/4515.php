<?
$subject_val = "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 09:11:25 2008" -->
<!-- isoreceived="20080804131125" -->
<!-- sent="Mon, 4 Aug 2008 09:11:20 -0400" -->
<!-- isosent="20080804131120" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TRUNK error ( MAN page ) since r19120" -->
<!-- id="ea86ce220808040611l251b58c3l54484935a456547d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990808032315r9df4198s855ae37fee3d0031_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 09:11:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4516.php">Tim Mattox: "Re: [OMPI devel] new Open MPI team member"</a>
<li><strong>Previous message:</strong> <a href="4514.php">Rainer Keller: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4511.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4517.php">Ralf Wildenhues: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4517.php">Ralf Wildenhues: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OMPI developers,
<br>
As this thread is making clear, not everyone saw and/or heeded the
<br>
note that we were upgrading the GNU autotools used for building Open MPI's
<br>
nightly tarballs.  See <a href="http://www.open-mpi.org/svn/building.php">http://www.open-mpi.org/svn/building.php</a> the the version
<br>
matrix.  For your reference, the trunk &amp; 1.3 nightlies are being built
<br>
with these versions, and I recommend everyone upgrade to these:
<br>
&nbsp;&nbsp;m4 1.4.11
<br>
&nbsp;&nbsp;autoconf 2.62
<br>
&nbsp;&nbsp;automake 1.10.1
<br>
&nbsp;&nbsp;libtool 2.2.4
<br>
<p>2008/8/4 Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; automake (GNU automake) 1.10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; autoconf (GNU Autoconf) 2.61
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ltmain.sh (GNU libtool) 1.5.24 (1.1220.2.455 2007/06/24 02:13:29)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/3/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What version of the GNU auto tools are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 3, 2008, at 9:42 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I downloaded from the trunk,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure .....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.log attached
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 8/3/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: We are not seeing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this error; can you please send all the required info?  This is not enough
</span><br>
<span class="quotelev3">&gt;&gt;&gt; info to diagnose why you are seeing it and we are not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 3, 2008, at 8:53 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I experience this error since r19120
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ( a lot of output )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; creating libmpi.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (cd .libs &amp;&amp; rm -f libmpi.la &amp;&amp; ln -s ../libmpi.la libmpi.la)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Creating mpi/man/man3/MPI.3 man page...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh: mpi/man/man3/MPI.3: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [mpi/man/man3/MPI.3] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/build/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/build/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; p.s. of course I  run autogen and configure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny.
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** WARNING:  This email contains an attachment of a very suspicious type.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** You are urged NOT to open this attachment unless you are absolutely
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** sure it is legitimate.  Opening this attachment may cause irreparable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** damage to your computer and your files.  If you have any questions
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IT. **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   **
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** This warning was added by the IU Computer Science Dept. mail scanner.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   **
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;config.zip&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4516.php">Tim Mattox: "Re: [OMPI devel] new Open MPI team member"</a>
<li><strong>Previous message:</strong> <a href="4514.php">Rainer Keller: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4511.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4517.php">Ralf Wildenhues: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4517.php">Ralf Wildenhues: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
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
