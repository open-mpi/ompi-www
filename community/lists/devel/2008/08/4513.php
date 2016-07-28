<?
$subject_val = "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 08:42:27 2008" -->
<!-- isoreceived="20080804124227" -->
<!-- sent="Mon, 4 Aug 2008 14:42:08 +0200" -->
<!-- isosent="20080804124208" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TRUNK error ( MAN page ) since r19120" -->
<!-- id="2ED54950-EC18-4AFD-A05D-4377D6058F20_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1217853277.16325.21.camel_at_hp-laptop" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 08:42:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4514.php">Rainer Keller: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4512.php">Kiril Dichev: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4512.php">Kiril Dichev: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4514.php">Rainer Keller: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4514.php">Rainer Keller: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Same here. Debian .0, latest and greatest autotools. The error is:
<br>
<p>/bin/sh: mpi/man/man3/MPI.3: No such file or directory
<br>
make[2]: *** [mpi/man/man3/MPI.3] Error 1
<br>
make[1]: *** [install-recursive] Error 1
<br>
make: *** [install-recursive] Error 1
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 4, 2008, at 2:34 PM, Kiril Dichev wrote:
<br>
<p><span class="quotelev1">&gt; Hi ,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I experience exactly the same behaviour as Lenny and I am using a  
</span><br>
<span class="quotelev1">&gt; recent
</span><br>
<span class="quotelev1">&gt; auto-tools suite - automake 1.10.1, autoconf 2.62, libtool 2.2. I
</span><br>
<span class="quotelev1">&gt; compile with GCC 4.1.2. Then I checked out a revision before 19120  
</span><br>
<span class="quotelev1">&gt; as he
</span><br>
<span class="quotelev1">&gt; mentioned it used to compile and the compilation went through. I  
</span><br>
<span class="quotelev1">&gt; used an
</span><br>
<span class="quotelev1">&gt; Intel Xeon machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Kiril
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2008-08-04 at 09:15 +0300, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt; automake (GNU automake) 1.10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; autoconf (GNU Autoconf) 2.61
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ltmain.sh (GNU libtool) 1.5.24 (1.1220.2.455 2007/06/24 02:13:29)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8/3/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;        What version of the GNU auto tools are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        On Aug 3, 2008, at 9:42 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                I downloaded from the trunk,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                ./configure .....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                make all install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                config.log attached
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                On 8/3/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: We
</span><br>
<span class="quotelev2">&gt;&gt;                are not seeing this error; can you please send all the
</span><br>
<span class="quotelev2">&gt;&gt;                required info?  This is not enough info to diagnose
</span><br>
<span class="quotelev2">&gt;&gt;                why you are seeing it and we are not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                On Aug 3, 2008, at 8:53 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                I experience this error since r19120
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                #make all install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                ( a lot of output )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                creating libmpi.la
</span><br>
<span class="quotelev2">&gt;&gt;                (cd .libs &amp;&amp; rm -f libmpi.la &amp;&amp; ln -s ../libmpi.la
</span><br>
<span class="quotelev2">&gt;&gt;                libmpi.la)
</span><br>
<span class="quotelev2">&gt;&gt;                Creating mpi/man/man3/MPI.3 man page...
</span><br>
<span class="quotelev2">&gt;&gt;                /bin/sh: mpi/man/man3/MPI.3: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;                make[2]: *** [mpi/man/man3/MPI.3] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;                make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;                `/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/ 
</span><br>
<span class="quotelev2">&gt;&gt; build/ompi'
</span><br>
<span class="quotelev2">&gt;&gt;                make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;                make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt;                `/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/ 
</span><br>
<span class="quotelev2">&gt;&gt; build/ompi'
</span><br>
<span class="quotelev2">&gt;&gt;                make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                p.s. of course I  run autogen and configure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                --
</span><br>
<span class="quotelev2">&gt;&gt;                Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;                Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;                **
</span><br>
<span class="quotelev2">&gt;&gt;                **
</span><br>
<span class="quotelev2">&gt;&gt;                ** WARNING:  This email contains an attachment of a
</span><br>
<span class="quotelev2">&gt;&gt;                very suspicious type.  **
</span><br>
<span class="quotelev2">&gt;&gt;                ** You are urged NOT to open this attachment unless
</span><br>
<span class="quotelev2">&gt;&gt;                you are absolutely     **
</span><br>
<span class="quotelev2">&gt;&gt;                ** sure it is legitimate.  Opening this attachment may
</span><br>
<span class="quotelev2">&gt;&gt;                cause irreparable   **
</span><br>
<span class="quotelev2">&gt;&gt;                ** damage to your computer and your files.  If you
</span><br>
<span class="quotelev2">&gt;&gt;                have any questions      **
</span><br>
<span class="quotelev2">&gt;&gt;                ** about the validity of this message, PLEASE SEEK
</span><br>
<span class="quotelev2">&gt;&gt;                HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev2">&gt;&gt;                **
</span><br>
<span class="quotelev2">&gt;&gt;                **
</span><br>
<span class="quotelev2">&gt;&gt;                ** This warning was added by the IU Computer Science
</span><br>
<span class="quotelev2">&gt;&gt;                Dept. mail scanner.   **
</span><br>
<span class="quotelev2">&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.zip&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --
</span><br>
<span class="quotelev2">&gt;&gt;        Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;        Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Kiril Dichev
</span><br>
<span class="quotelev1">&gt; Tel.: +49 711 685 60492
</span><br>
<span class="quotelev1">&gt; E-mail: dichev_at_[hidden]
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Universit&#228;t Stuttgart
</span><br>
<span class="quotelev1">&gt; 70550 Stuttgart
</span><br>
<span class="quotelev1">&gt; Germany
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4513/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4514.php">Rainer Keller: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4512.php">Kiril Dichev: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4512.php">Kiril Dichev: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4514.php">Rainer Keller: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4514.php">Rainer Keller: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
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
