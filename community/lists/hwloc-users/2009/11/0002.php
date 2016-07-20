<?
$subject_val = "[hwloc-users] Not able to compile an hwloc program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 20 18:54:12 2009" -->
<!-- isoreceived="20091120235412" -->
<!-- sent="Sat, 21 Nov 2009 05:24:04 +0530 (IST)" -->
<!-- isosent="20091120235404" -->
<!-- name="Sanket" -->
<!-- email="sanketst_at_[hidden]" -->
<!-- subject="[hwloc-users] Not able to compile an hwloc program" -->
<!-- id="135018.27449.qm_at_web8906.mail.in.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] Not able to compile an hwloc program<br>
<strong>From:</strong> Sanket (<em>sanketst_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-20 18:54:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0003.php">Samuel Thibault: "Re: [hwloc-users] Not able to compile an hwloc program"</a>
<li><strong>Previous message:</strong> <a href="0001.php">Samuel Thibault: "Re: [hwloc-users] Fwd: Make fails on MacosX 10.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0003.php">Samuel Thibault: "Re: [hwloc-users] Not able to compile an hwloc program"</a>
<li><strong>Reply:</strong> <a href="0003.php">Samuel Thibault: "Re: [hwloc-users] Not able to compile an hwloc program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

The commands are as follows. Their ouptut attached.

$./configure --prefix=/XYZ/hwloc-0.9.2/Installation_Dir/ | tee config.out
$make | tee make.out
$make install | tee mke-install.out

hwloc seems to have installed correctly. But I was unable to run the programs in the test folder.

Specifically, ran the following commands.

CFLAGS += $(pkg-config --cflags hwloc)
LDLIBS += $(pkg-config --libs hwloc)
cc hwloc-hello.c $(CFLAGS) -o hwloc-hello $(LDLIBS)
&#160;
&#160;

PKG_CONFIG_PATH didn't have the hwloc path defined. Hence used 
pkg-config -define-variable=VARIABLENAME=VARIABLEVALUE
to specify the directory in which hwloc.pc exists.

Getting the following errors when I try to compile hwloc_bind.c 

cc hwloc_bind.c $(CFLAGS) -o hwloc-hello $(LDLIBS)
-bash: CFLAGS: command not found
-bash: LDLIBS: command not found
hwloc_bind.c:10:19: error: hwloc.h: No such file or directory
hwloc_bind.c:11:28: error: private/config.h: No such file or directory
hwloc_bind.c:14: error: expected &#226;=&#226;, &#226;,&#226;, &#226;;&#226;, &#226;asm&#226; or &#226;__attribute__&#226; before &#226;topology&#226;
hwloc_bind.c:24: error: expected &#226;)&#226; before &#226;cpuset&#226;
hwloc_bind.c: In function &#226;main&#226;:
hwloc_bind.c:44: error: &#226;hwloc_cpuset_t&#226; undeclared (first use in this function)
hwloc_bind.c:44: error: (Each undeclared identifier is reported only once
hwloc_bind.c:44: error: for each function it appears in.)
hwloc_bind.c:44: error: expected &#226;;&#226; before &#226;set&#226;
hwloc_bind.c:45: error: &#226;hwloc_obj_t&#226; undeclared (first use in this function)
hwloc_bind.c:45: error: expected &#226;;&#226; before &#226;obj&#226;
hwloc_bind.c:48: error: &#226;topology&#226; undeclared (first use in this function)
hwloc_bind.c:51: error: &#226;obj&#226; undeclared (first use in this function)
hwloc_bind.c:52: error: &#226;set&#226; undeclared (first use in this function)
hwloc_bind.c:67: error: &#226;HWLOC_CPUBIND_STRICT&#226; undeclared (first use in this function)

Essentially seems like it's not able to link or include hwloc.h and the method definitions.

Can you please help in this matter.
- How to get this running.
- How to compile and run a sample hwloc program.

Thank you very much.

With regards,
Sanket


      The INTERNET now has a personality. YOURS! See your Yahoo! Homepage. <a href="http://in.yahoo.com/">http://in.yahoo.com/</a>
<br>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0002/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0002/config-config.txt">config-config.txt</a>
</ul>
<!-- attachment="config-config.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0002/make-Install-out.txt">make-Install-out.txt</a>
</ul>
<!-- attachment="make-Install-out.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0002/make-out.txt">make-out.txt</a>
</ul>
<!-- attachment="make-out.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0003.php">Samuel Thibault: "Re: [hwloc-users] Not able to compile an hwloc program"</a>
<li><strong>Previous message:</strong> <a href="0001.php">Samuel Thibault: "Re: [hwloc-users] Fwd: Make fails on MacosX 10.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0003.php">Samuel Thibault: "Re: [hwloc-users] Not able to compile an hwloc program"</a>
<li><strong>Reply:</strong> <a href="0003.php">Samuel Thibault: "Re: [hwloc-users] Not able to compile an hwloc program"</a>
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
