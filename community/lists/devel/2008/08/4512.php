<?
$subject_val = "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 08:34:57 2008" -->
<!-- isoreceived="20080804123457" -->
<!-- sent="Mon, 04 Aug 2008 14:34:37 +0200" -->
<!-- isosent="20080804123437" -->
<!-- name="Kiril Dichev" -->
<!-- email="dichev_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] TRUNK error ( MAN page ) since r19120" -->
<!-- id="1217853277.16325.21.camel_at_hp-laptop" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Kiril Dichev (<em>dichev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-04 08:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4513.php">George Bosilca: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4511.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4511.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4513.php">George Bosilca: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4513.php">George Bosilca: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ,
<br>
<p>I experience exactly the same behaviour as Lenny and I am using a recent
<br>
auto-tools suite - automake 1.10.1, autoconf 2.62, libtool 2.2. I
<br>
compile with GCC 4.1.2. Then I checked out a revision before 19120 as he
<br>
mentioned it used to compile and the compilation went through. I used an
<br>
Intel Xeon machine.
<br>
<p>Cheers,
<br>
Kiril
<br>
<p><p>On Mon, 2008-08-04 at 09:15 +0300, Lenny Verkhovsky wrote:
<br>
<span class="quotelev1">&gt; automake (GNU automake) 1.10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; autoconf (GNU Autoconf) 2.61
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ltmain.sh (GNU libtool) 1.5.24 (1.1220.2.455 2007/06/24 02:13:29)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/3/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         What version of the GNU auto tools are you using?
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         On Aug 3, 2008, at 9:42 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;                 I downloaded from the trunk,
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 ./autogen.sh
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 ./configure .....
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 make all install
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 config.log attached
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 On 8/3/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: We
</span><br>
<span class="quotelev1">&gt;                 are not seeing this error; can you please send all the
</span><br>
<span class="quotelev1">&gt;                 required info?  This is not enough info to diagnose
</span><br>
<span class="quotelev1">&gt;                 why you are seeing it and we are not.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 On Aug 3, 2008, at 8:53 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 Hi,
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 I experience this error since r19120
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 #make all install
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 ( a lot of output )
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 creating libmpi.la
</span><br>
<span class="quotelev1">&gt;                 (cd .libs &amp;&amp; rm -f libmpi.la &amp;&amp; ln -s ../libmpi.la
</span><br>
<span class="quotelev1">&gt;                 libmpi.la)
</span><br>
<span class="quotelev1">&gt;                 Creating mpi/man/man3/MPI.3 man page...
</span><br>
<span class="quotelev1">&gt;                 /bin/sh: mpi/man/man3/MPI.3: No such file or directory
</span><br>
<span class="quotelev1">&gt;                 make[2]: *** [mpi/man/man3/MPI.3] Error 1
</span><br>
<span class="quotelev1">&gt;                 make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;                 `/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/build/ompi'
</span><br>
<span class="quotelev1">&gt;                 make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;                 make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;                 `/home/USERS/lenny/OMPI_ORTE_CODE/ompi-trunk_19120/build/ompi'
</span><br>
<span class="quotelev1">&gt;                 make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 p.s. of course I  run autogen and configure.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 Lenny.
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 devel mailing list
</span><br>
<span class="quotelev1">&gt;                 devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 -- 
</span><br>
<span class="quotelev1">&gt;                 Jeff Squyres
</span><br>
<span class="quotelev1">&gt;                 Cisco Systems
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 _______________________________________________
</span><br>
<span class="quotelev1">&gt;                 devel mailing list
</span><br>
<span class="quotelev1">&gt;                 devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 *****************************************************************************
</span><br>
<span class="quotelev1">&gt;                 **
</span><br>
<span class="quotelev1">&gt;                 **
</span><br>
<span class="quotelev1">&gt;                 ** WARNING:  This email contains an attachment of a
</span><br>
<span class="quotelev1">&gt;                 very suspicious type.  **
</span><br>
<span class="quotelev1">&gt;                 ** You are urged NOT to open this attachment unless
</span><br>
<span class="quotelev1">&gt;                 you are absolutely     **
</span><br>
<span class="quotelev1">&gt;                 ** sure it is legitimate.  Opening this attachment may
</span><br>
<span class="quotelev1">&gt;                 cause irreparable   **
</span><br>
<span class="quotelev1">&gt;                 ** damage to your computer and your files.  If you
</span><br>
<span class="quotelev1">&gt;                 have any questions      **
</span><br>
<span class="quotelev1">&gt;                 ** about the validity of this message, PLEASE SEEK
</span><br>
<span class="quotelev1">&gt;                 HELP BEFORE OPENING IT. **
</span><br>
<span class="quotelev1">&gt;                 **
</span><br>
<span class="quotelev1">&gt;                 **
</span><br>
<span class="quotelev1">&gt;                 ** This warning was added by the IU Computer Science
</span><br>
<span class="quotelev1">&gt;                 Dept. mail scanner.   **
</span><br>
<span class="quotelev1">&gt;                 *****************************************************************************
</span><br>
<span class="quotelev1">&gt;                 
</span><br>
<span class="quotelev1">&gt;                 &lt;config.zip&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;                 devel mailing list
</span><br>
<span class="quotelev1">&gt;                 devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         Jeff Squyres
</span><br>
<span class="quotelev1">&gt;         Cisco Systems
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<pre>
-- 
Dipl.-Inf. Kiril Dichev
Tel.: +49 711 685 60492
E-mail: dichev_at_[hidden]
High Performance Computing Center Stuttgart (HLRS)
Universit&#195;&#164;t Stuttgart
70550 Stuttgart
Germany
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4513.php">George Bosilca: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Previous message:</strong> <a href="4511.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>In reply to:</strong> <a href="4511.php">Lenny Verkhovsky: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4513.php">George Bosilca: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
<li><strong>Reply:</strong> <a href="4513.php">George Bosilca: "Re: [OMPI devel] TRUNK error ( MAN page ) since r19120"</a>
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
