<?
$subject_val = "Re: [OMPI users] Installation Problems with Openmpi-1.2.9";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 14:42:17 2009" -->
<!-- isoreceived="20090313184217" -->
<!-- sent="Fri, 13 Mar 2009 11:42:12 -0700" -->
<!-- isosent="20090313184212" -->
<!-- name="Amos Leffler" -->
<!-- email="amosleffler_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installation Problems with Openmpi-1.2.9" -->
<!-- id="61b264610903131142k3a332992p9757b8cdacf3da42_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="287289EA-8BBE-4B9A-9074-9ACE991709A5_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Installation Problems with Openmpi-1.2.9<br>
<strong>From:</strong> Amos Leffler (<em>amosleffler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 14:42:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8427.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8425.php">Ralph Castain: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>In reply to:</strong> <a href="8411.php">Joshua Bernstein: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8429.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8429.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks for your advice.  I went back carefully through my PATH
<br>
file and corrected that so that I compiled openmpi-1.2.9 with the
<br>
Intel compilers seemingly without errors.  However, the simple test
<br>
examples wont run with the same error:
<br>
~/Desktop/openmpi-1.2.9/examples&gt; mpicc hello_c.c
<br>
mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
I get similar results with the other examples.  Here is where I need help.
<br>
<p>&nbsp;Amos Leffler
<br>
<p>On Thu, Mar 12, 2009 at 12:22 PM, Joshua Bernstein
<br>
&lt;jbernstein_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Amos,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        It looks like you do not have permission to make the directory
</span><br>
<span class="quotelev1">&gt; /usr/local/etc. Either you need to run the make all install as root, so you
</span><br>
<span class="quotelev1">&gt; have permission to that directory, or you need to use the --prefix=&lt;path&gt;
</span><br>
<span class="quotelev1">&gt; option to configure so that the installation gets installed into a path
</span><br>
<span class="quotelev1">&gt; where you have permission.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Joshua Bernstein
</span><br>
<span class="quotelev1">&gt; Senior Software Engineer
</span><br>
<span class="quotelev1">&gt; Penguin Computing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2009, at 12:13 PM, Amos Leffler wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Forum,
</span><br>
<span class="quotelev2">&gt;&gt;          Attached is a file of my installation and trying examples
</span><br>
<span class="quotelev2">&gt;&gt; for openmpi-1.2.9 which were not successful. Hopefully the problem is
</span><br>
<span class="quotelev2">&gt;&gt; a simple one and obvious to a more experienced user.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I am trying to install and test openmpi-1.2.9. I found that I
</span><br>
<span class="quotelev2">&gt;&gt; could not use the Intel 11.0/.081 C++
</span><br>
<span class="quotelev2">&gt;&gt; and Fortran compilers although I think the problem is with these
</span><br>
<span class="quotelev2">&gt;&gt; compilers not openmpi.  The openmpi-
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.9 did compile successfully with the internal compilers of SuSE
</span><br>
<span class="quotelev2">&gt;&gt; 10.2.  However, at the end of the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;make all install&quot; command output I noted that some of the make
</span><br>
<span class="quotelev2">&gt;&gt; commands did not run  properly as
</span><br>
<span class="quotelev2">&gt;&gt; shown below.
</span><br>
<span class="quotelev2">&gt;&gt;    I tried to run some of the simple examples and was not successful.
</span><br>
<span class="quotelev2">&gt;&gt;  For hello_c.c I received the
</span><br>
<span class="quotelev2">&gt;&gt; message &quot;mpicc not found&quot;.  Is there a simple workaround?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt; Making install in asm
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Nothing to be done for `install-exec-am'.
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
</span><br>
<span class="quotelev2">&gt;&gt; Making install in etc
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
</span><br>
<span class="quotelev2">&gt;&gt; test -z &quot;/usr/local/etc&quot; || /bin/mkdir -p &quot;/usr/local/etc&quot;
</span><br>
<span class="quotelev2">&gt;&gt; /bin/mkdir: cannot create directory `/usr/local/etc': Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [install-sysconfDATA] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [install-am] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Any help would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;                                                       Amos
</span><br>
<span class="quotelev2">&gt;&gt; Leffler&lt;install.output&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8427.php">Mostyn Lewis: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Previous message:</strong> <a href="8425.php">Ralph Castain: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>In reply to:</strong> <a href="8411.php">Joshua Bernstein: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8429.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8429.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
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
