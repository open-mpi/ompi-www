<?
$subject_val = "[OMPI users] Installation Problems with Openmpi-1.2.9";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 15:13:41 2009" -->
<!-- isoreceived="20090312191341" -->
<!-- sent="Thu, 12 Mar 2009 12:13:36 -0700" -->
<!-- isosent="20090312191336" -->
<!-- name="Amos Leffler" -->
<!-- email="amosleffler_at_[hidden]" -->
<!-- subject="[OMPI users] Installation Problems with Openmpi-1.2.9" -->
<!-- id="61b264610903121213i746ac630xcc6eb1271adb5280_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Installation Problems with Openmpi-1.2.9<br>
<strong>From:</strong> Amos Leffler (<em>amosleffler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-12 15:13:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8411.php">Joshua Bernstein: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8409.php">Robert Latham: "[OMPI users] freeing attributes on communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8411.php">Joshua Bernstein: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8411.php">Joshua Bernstein: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Forum,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Attached is a file of my installation and trying examples
<br>
for openmpi-1.2.9 which were not successful. Hopefully the problem is
<br>
a simple one and obvious to a more experienced user.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I am trying to install and test openmpi-1.2.9. I found that I
<br>
could not use the Intel 11.0/.081 C++
<br>
and Fortran compilers although I think the problem is with these
<br>
compilers not openmpi.  The openmpi-
<br>
1.2.9 did compile successfully with the internal compilers of SuSE
<br>
10.2.  However, at the end of the
<br>
&quot;make all install&quot; command output I noted that some of the make
<br>
commands did not run  properly as
<br>
shown below.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I tried to run some of the simple examples and was not successful.
<br>
&nbsp;For hello_c.c I received the
<br>
message &quot;mpicc not found&quot;.  Is there a simple workaround?
<br>
<p>make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/libltdl'
<br>
make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/libltdl'
<br>
Making install in asm
<br>
make[2]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
<br>
make[3]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
<br>
make[3]: Nothing to be done for `install-exec-am'.
<br>
make[3]: Nothing to be done for `install-data-am'.
<br>
make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
<br>
make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/asm'
<br>
Making install in etc
<br>
make[2]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
<br>
make[3]: Entering directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
<br>
test -z &quot;/usr/local/etc&quot; || /bin/mkdir -p &quot;/usr/local/etc&quot;
<br>
/bin/mkdir: cannot create directory `/usr/local/etc': Permission denied
<br>
make[3]: *** [install-sysconfDATA] Error 1
<br>
make[3]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
<br>
make[2]: *** [install-am] Error 2
<br>
make[2]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal/etc'
<br>
make[1]: *** [install-recursive] Error 1
<br>
make[1]: Leaving directory `/home/amos/Desktop/openmpi-1.2.9/opal'
<br>
make: *** [install-recursive] Error 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Any help would be appreciated.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Amos Leffler
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8410/install.output">install.output</a>
</ul>
<!-- attachment="install.output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8411.php">Joshua Bernstein: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8409.php">Robert Latham: "[OMPI users] freeing attributes on communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8411.php">Joshua Bernstein: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Reply:</strong> <a href="8411.php">Joshua Bernstein: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
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
