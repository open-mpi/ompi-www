<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 17:23:36 2012" -->
<!-- isoreceived="20120302222336" -->
<!-- sent="Fri, 2 Mar 2012 17:23:47 -0500" -->
<!-- isosent="20120302222347" -->
<!-- name="Yiguang Yan" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="4F510223.26353.7B91F4_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes<br>
<strong>From:</strong> Yiguang Yan (<em>yanyg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 17:23:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18677.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18675.php">Denver Smith: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18677.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18677.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It turns out that the &quot;-x&quot; option should be put on each line of the app file if app file is used.
<br>
<p>OK, now test results on our cluster, in case this may be useful to some Open MPI users(Open MPI 1.4.3 used on 
<br>
my system):
<br>
<p>(1) If I run mpirun command from command line as Jeff's foo test, everything works fine, the same as in Jeff's foo 
<br>
test.
<br>
<p>(2) Now let me start mpirun from shell script:
<br>
<p>first, foo script includes:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
#!/bin/sh -f
<br>
<p>echo $HOSTNAME: PATH : $PATH
<br>
echo $HOSTNAME: LD_LIBRARY_PATH : $LD_LIBRARY_PATH
<br>
&lt;&lt;&lt;
<br>
<p>testenvars.bash script includes:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
#!/bin/sh -f
<br>
#nohup
<br>
#
<br>
# &gt;-------------------------------------------------------------------------------------------&lt;
<br>
adinahome=/home/yiguang/testdmp881
<br>
mpirunfile=$adinahome/bin/mpirun
<br>
#
<br>
# Set envars for mpirun and orted
<br>
#
<br>
export PATH=/this/is/a/fake/path:$adinahome/bin:$adinahome/tools:$PATH
<br>
export LD_LIBRARY_PATH=/this/is/a/fake/libdir:$adinahome/lib:$LD_LIBRARY_PATH
<br>
#
<br>
#
<br>
# run DMP problem
<br>
#
<br>
mcaprefix=&quot;--prefix $adinahome&quot;
<br>
mcaenvars=&quot;-x PATH -x LD_LIBRARY_PATH&quot;
<br>
mcabtlconn=&quot;--mca btl openib,sm,self&quot;
<br>
#mcaplmbase=&quot;--mca plm_base_verbose 100&quot;
<br>
<p># mpirun is under $adinahome/bin
<br>
<p>$mpirunfile --host gulftown,ibnode001 foo
<br>
&lt;&lt;&lt;
<br>
<p>Now if I run testenvars.bash from command line:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
[yiguang_at_gulftown testdmp]$ ./testenvars.bash
<br>
gulftown: PATH : 
<br>
/home/yiguang/testdmp881/bin:/home/yiguang/testdmp881/bin:/this/is/a/fake/path:/home/yiguang/testdmp881/bin:/ho
<br>
me/yiguang/testdmp881/tools:/usr/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/adina/system8.8/tools:/usr/adi
<br>
na/system8.7/tools:/usr/adina/system8.6/tools:/usr/adina/system8.5/tools:/home/yiguang/bin
<br>
gulftown: LD_LIBRARY_PATH : 
<br>
/home/yiguang/testdmp881/lib:/home/yiguang/testdmp881/lib:/this/is/a/fake/libdir:/home/yiguang/testdmp881/lib:
<br>
ibnode001: PATH : /home/yiguang/testdmp881/bin:/home/yiguang/testdmp881/bin:/usr/bin:/usr/lib64/qt-
<br>
3.3/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin
<br>
ibnode001: LD_LIBRARY_PATH : /home/yiguang/testdmp881/lib:/home/yiguang/testdmp881/lib:
<br>
&lt;&lt;&lt;
<br>
<p>If, in the testenvars.bash script, I change the line 
<br>
$mpirunfile --host gulftown,ibnode001 foo
<br>
--&gt;
<br>
mpirun --prefix $adinahome --host gulftown,ibnode001 foo
<br>
<p>then I get the same output as above, and as expected, full path of mpirun and --prefix give us the same action. The 
<br>
unexpected part is that /home/yiguang/testdmp881/bin and /home/yiguang/testdmp881/lib are included twice here, 
<br>
why?
<br>
<p>Now if I change, in the above testenvars.bash script, the line
<br>
<p>$mpirunfile --host gulftown,ibnode001 foo
<br>
--&gt;
<br>
mpirun --prefix $adinahome $mcaenvars --host gulftown,ibnode001 foo
<br>
<p>Then run the script:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
[yiguang_at_gulftown testdmp]$ ./testenvars.bash
<br>
gulftown: PATH : 
<br>
/home/yiguang/testdmp881/bin:/this/is/a/fake/path:/home/yiguang/testdmp881/bin:/home/yiguang/testdmp881/tools:/
<br>
usr/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/adina/system8.8/tools:/usr/adina/system8.7/tools:/usr/adina/s
<br>
ystem8.6/tools:/usr/adina/system8.5/tools:/home/yiguang/bin
<br>
gulftown: LD_LIBRARY_PATH : /home/yiguang/testdmp881/lib:/this/is/a/fake/libdir:/home/yiguang/testdmp881/lib:
<br>
ibnode001: PATH : 
<br>
/home/yiguang/testdmp881/bin:/this/is/a/fake/path:/home/yiguang/testdmp881/bin:/home/yiguang/testdmp881/tools:/
<br>
usr/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/adina/system8.8/tools:/usr/adina/system8.7/tools:/usr/adina/s
<br>
ystem8.6/tools:/usr/adina/system8.5/tools:/home/yiguang/bin
<br>
ibnode001: LD_LIBRARY_PATH : /home/yiguang/testdmp881/lib:/this/is/a/fake/libdir:/home/yiguang/testdmp881/lib:
<br>
&lt;&lt;&lt;
<br>
This time, the PATH and LD_LIBRARY_PATH are passed to slave node, and /home/yiguang/testdmp881/bin and 
<br>
/home/yiguang/testdmp881/lib include only once, different from the last test.
<br>
<p>So far so good expect the minor things.
<br>
<p>(3) Now I changed to use app file
<br>
<p>First scripts, foo script is as above, testenvars-app.bash scripts includes:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
[yiguang_at_gulftown testdmp]$ cat testenvars-app.bash
<br>
#!/bin/sh -f
<br>
#nohup
<br>
#
<br>
# &gt;-------------------------------------------------------------------------------------------&lt;
<br>
adinahome=/home/yiguang/testdmp881
<br>
mpirunfile=$adinahome/bin/mpirun
<br>
#
<br>
# Set envars for mpirun and orted
<br>
#
<br>
export PATH=/this/is/a/fake/path:$adinahome/bin:$adinahome/tools:$PATH
<br>
export LD_LIBRARY_PATH=/this/is/a/fake/libdir:$adinahome/lib:$LD_LIBRARY_PATH
<br>
#
<br>
#
<br>
# run DMP problem
<br>
#
<br>
#mcaprefix=&quot;--prefix $adinahome&quot;
<br>
mcaenvars=&quot;-x PATH -x LD_LIBRARY_PATH&quot;
<br>
mcabtlconn=&quot;--mca btl openib,sm,self&quot;
<br>
#mcaplmbase=&quot;--mca plm_base_verbose 100&quot;
<br>
<p>$mpirunfile $mcabltconn --app addmpw-foo-nox
<br>
#$mpirunfile $mcaenvars $mcabltconn --app addmpw-foo-nox
<br>
#$mpirunfile $mcabltconn --app addmpw-foo
<br>
&lt;&lt;&lt;
<br>
<p>addmpw-foo-nox app file as:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
[yiguang_at_gulftown testdmp]$ cat addmpw-foo-nox
<br>
--prefix /home/yiguang/testdmp881 -n 1 -host gulftown foo
<br>
--prefix /home/yiguang/testdmp881 -n 1 -host ibnode001 foo
<br>
&lt;&lt;&lt;
<br>
addmpw-foo app file as:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
[yiguang_at_gulftown testdmp]$ cat addmpw-foo
<br>
--prefix /home/yiguang/testdmp881 -x PATH -x LD_LIBRARY_PATH -n 1 -host gulftown foo
<br>
--prefix /home/yiguang/testdmp881 -x PATH -x LD_LIBRARY_PATH -n 1 -host ibnode001 foo
<br>
&lt;&lt;&lt;
<br>
<p>(a) If I run testenvars-app.bash, choosing this one from the last three lines of it:
<br>
<p><span class="quotelev3">&gt;&gt;&gt;$mpirunfile $mcabltconn --app addmpw-foo-nox
</span><br>
<p>then output as:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
[yiguang_at_gulftown testdmp]$ ./testenvars-app.bash
<br>
gulftown: PATH : 
<br>
/home/yiguang/testdmp881/bin:/home/yiguang/testdmp881/bin:/this/is/a/fake/path:/home/yiguang/testdmp881/bin:/ho
<br>
me/yiguang/testdmp881/tools:/usr/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/adina/system8.8/tools:/usr/adi
<br>
na/system8.7/tools:/usr/adina/system8.6/tools:/usr/adina/system8.5/tools:/home/yiguang/bin
<br>
gulftown: LD_LIBRARY_PATH : 
<br>
/home/yiguang/testdmp881/lib:/home/yiguang/testdmp881/lib:/this/is/a/fake/libdir:/home/yiguang/testdmp881/lib:
<br>
ibnode001: PATH : /home/yiguang/testdmp881/bin:/home/yiguang/testdmp881/bin:/usr/bin:/usr/lib64/qt-
<br>
3.3/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin
<br>
ibnode001: LD_LIBRARY_PATH : /home/yiguang/testdmp881/lib:/home/yiguang/testdmp881/lib:
<br>
&lt;&lt;&lt;
<br>
<p>(b) If I choose the second one from the last three lines of testenvars-app.bash script, that is uncomment the line:
<br>
$mpirunfile $mcaenvars $mcabltconn --app addmpw-foo-nox
<br>
and comment out other two lines, output as:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
[yiguang_at_gulftown testdmp]$ ./testenvars-app.bash
<br>
gulftown: PATH : 
<br>
/home/yiguang/testdmp881/bin:/home/yiguang/testdmp881/bin:/this/is/a/fake/path:/home/yiguang/testdmp881/bin:/ho
<br>
me/yiguang/testdmp881/tools:/usr/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/adina/system8.8/tools:/usr/adi
<br>
na/system8.7/tools:/usr/adina/system8.6/tools:/usr/adina/system8.5/tools:/home/yiguang/bin
<br>
gulftown: LD_LIBRARY_PATH : 
<br>
/home/yiguang/testdmp881/lib:/home/yiguang/testdmp881/lib:/this/is/a/fake/libdir:/home/yiguang/testdmp881/lib:
<br>
ibnode001: PATH : /home/yiguang/testdmp881/bin:/home/yiguang/testdmp881/bin:/usr/bin:/usr/lib64/qt-
<br>
3.3/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin
<br>
ibnode001: LD_LIBRARY_PATH : /home/yiguang/testdmp881/lib:/home/yiguang/testdmp881/lib:
<br>
&lt;&lt;&lt;
<br>
<p>(c) now if I uncomment the last line and comment out the other two of the last three lines, as run
<br>
$mpirunfile $mcabltconn --app addmpw-foo
<br>
<p>then output as:
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
[yiguang_at_gulftown testdmp]$ ./testenvars-app.bash
<br>
gulftown: PATH : 
<br>
/home/yiguang/testdmp881/bin:/this/is/a/fake/path:/home/yiguang/testdmp881/bin:/home/yiguang/testdmp881/tools:/
<br>
usr/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/adina/system8.8/tools:/usr/adina/system8.7/tools:/usr/adina/s
<br>
ystem8.6/tools:/usr/adina/system8.5/tools:/home/yiguang/bin
<br>
gulftown: LD_LIBRARY_PATH : /home/yiguang/testdmp881/lib:/this/is/a/fake/libdir:/home/yiguang/testdmp881/lib:
<br>
ibnode001: PATH : 
<br>
/home/yiguang/testdmp881/bin:/this/is/a/fake/path:/home/yiguang/testdmp881/bin:/home/yiguang/testdmp881/tools:/
<br>
usr/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/adina/system8.8/tools:/usr/adina/system8.7/tools:/usr/adina/s
<br>
ystem8.6/tools:/usr/adina/system8.5/tools:/home/yiguang/bin
<br>
ibnode001: LD_LIBRARY_PATH : /home/yiguang/testdmp881/lib:/this/is/a/fake/libdir:/home/yiguang/testdmp881/lib:
<br>
&lt;&lt;&lt;
<br>
<p>So from tests (a),(b),(c), if I am using app file, the PATH and LD_LIBRARY_PATH are only passed to slave node 
<br>
when the &quot;-x&quot; is set on each line of the app file, similar to the &quot;--prefix&quot; option.
<br>
<p>Any conclusion? If a bug fix is admitted for the &quot;--prefix&quot; option, I would think this is another bug for &quot;-x&quot; option.
<br>
<p>Thanks,
<br>
Yiguang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18677.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18675.php">Denver Smith: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="18649.php">Yiguang Yan: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18677.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18677.php">Ralph Castain: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
