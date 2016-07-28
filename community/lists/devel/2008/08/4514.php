<?
$subject_val = "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 08:57:04 2008" -->
<!-- isoreceived="20080804125704" -->
<!-- sent="Mon, 4 Aug 2008 14:56:48 +0200" -->
<!-- isosent="20080804125648" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TRUNK error ( MAN page ) since r19120" -->
<!-- id="200808041456.49143.keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2ED54950-EC18-4AFD-A05D-4377D6058F20_at_eecs.utk.edu" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 08:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4515.php">Tim Mattox: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4513.php">George Bosilca: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4513.php">George Bosilca: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4515.php">Tim Mattox: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is for VPATH builds:
<br>
In Makefile.man-page-rules, the corresponding VPATH / builddir is missing.
<br>
<p>CU,
<br>
Rainer
<br>
<p><p>On Montag, 4. August 2008, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Same here. Debian .0, latest and greatest autotools. The error is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh: mpi/man/man3/MPI.3: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi/man/man3/MPI.3] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2008, at 2:34 PM, Kiril Dichev wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi ,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I experience exactly the same behaviour as Lenny and I am using a
</span><br>
<span class="quotelev2">&gt; &gt; recent
</span><br>
<span class="quotelev2">&gt; &gt; auto-tools suite - automake 1.10.1, autoconf 2.62, libtool 2.2. I
</span><br>
<span class="quotelev2">&gt; &gt; compile with GCC 4.1.2. Then I checked out a revision before 19120
</span><br>
<span class="quotelev2">&gt; &gt; as he
</span><br>
<span class="quotelev2">&gt; &gt; mentioned it used to compile and the compilation went through. I
</span><br>
<span class="quotelev2">&gt; &gt; used an
</span><br>
<span class="quotelev2">&gt; &gt; Intel Xeon machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; Kiril
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 2008-08-04 at 09:15 +0300, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automake (GNU automake) 1.10
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; autoconf (GNU Autoconf) 2.61
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ltmain.sh (GNU libtool) 1.5.24 (1.1220.2.455 2007/06/24 02:13:29)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 8/3/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        What version of the GNU auto tools are you using?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        On Aug 3, 2008, at 9:42 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                I downloaded from the trunk,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                ./autogen.sh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                ./configure .....
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                make all install
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                config.log attached
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                On 8/3/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: We
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                are not seeing this error; can you please send all the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                required info?  This is not enough info to diagnose
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                why you are seeing it and we are not.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                  <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                On Aug 3, 2008, at 8:53 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                I experience this error since r19120
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                #make all install
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                ( a lot of output )
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                creating libmpi.la
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                (cd .libs &amp;&amp; rm -f libmpi.la &amp;&amp; ln -s ../libmpi.la
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                libmpi.la)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Creating mpi/man/man3/MPI.3 man page...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                /bin/sh: mpi/man/man3/MPI.3: No such file or directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                make[2]: *** [mpi/man/man3/MPI.3] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                make[2]: Leaving directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                `/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; build/ompi'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                `/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; build/ompi'
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                p.s. of course I  run autogen and configure.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Lenny.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ************************************************************************
</span><br>
<span class="quotelev3">&gt; &gt;&gt;***** **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                ** WARNING:  This email contains an attachment of a
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                very suspicious type.  **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                ** You are urged NOT to open this attachment unless
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                you are absolutely     **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                ** sure it is legitimate.  Opening this attachment may
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                cause irreparable   **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                ** damage to your computer and your files.  If you
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                have any questions      **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                ** about the validity of this message, PLEASE SEEK
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                ** This warning was added by the IU Computer Science
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                Dept. mail scanner.   **
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ************************************************************************
</span><br>
<span class="quotelev3">&gt; &gt;&gt;*****
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;config.zip&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        --
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Dipl.-Inf. Kiril Dichev
</span><br>
<span class="quotelev2">&gt; &gt; Tel.: +49 711 685 60492
</span><br>
<span class="quotelev2">&gt; &gt; E-mail: dichev_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt; &gt; Universit&#195;&#164;t Stuttgart
</span><br>
<span class="quotelev2">&gt; &gt; 70550 Stuttgart
</span><br>
<span class="quotelev2">&gt; &gt; Germany
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p><pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller   <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                          Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                  Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4515.php">Tim Mattox: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4513.php">George Bosilca: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4513.php">George Bosilca: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4515.php">Tim Mattox: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
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
