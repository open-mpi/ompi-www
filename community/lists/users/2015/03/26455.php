<?
$subject_val = "[OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 16:59:55 2015" -->
<!-- isoreceived="20150312205955" -->
<!-- sent="Thu, 12 Mar 2015 17:59:52 -0300" -->
<!-- isosent="20150312205952" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled" -->
<!-- id="5501FE48.1020406_at_gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled<br>
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-12 16:59:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio'	enabled"</a>
<li><strong>Previous message:</strong> <a href="26454.php">Saliya Ekanayake: "[OMPI users] Process Binding Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio'	enabled"</a>
<li><strong>Reply:</strong> <a href="26456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio'	enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello there
<br>
<p>I'm trying to compile the mentioned combination in a centos 6.5 x64 host 
<br>
without success, while using intel 14.0 the problem does not happens.
<br>
<p>Using the configure option '--disable-io-romio' allows me to compile 
<br>
without further trouble, but that's not really a fix. ;)
<br>
<p>I've tried both 1.8.3 and 1.8.4 tarballs.
<br>
<p>Here's the error message:
<br>
============================================================
<br>
/usr/include/bits/fcntl2.h(44): error #18015: invalid use of 
<br>
'__builtin_va_arg_pack_len'
<br>
/usr/include/bits/fcntl2.h(57): error #18015: invalid use of 
<br>
'__builtin_va_arg_pack_len'
<br>
/usr/include/bits/fcntl2.h(60): error #18015: invalid use of 
<br>
'__builtin_va_arg_pack'
<br>
compilation aborted for adio/ad_nfs/ad_nfs_open.c (code 1)
<br>
============================================================
<br>
<p>And the configure options:
<br>
============================================================
<br>
--enable-shared		\
<br>
--enable-static         \
<br>
--disable-vt		\
<br>
--with-sge		\
<br>
--with-tm=/opt/torque	\
<br>
--with-valgrind		\
<br>
--with-psm		\
<br>
--with-verbs=yes	\
<br>
--with-threads=posix
<br>
=============================================================
<br>
<p><p>TIA,
<br>
Fabricio
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio'	enabled"</a>
<li><strong>Previous message:</strong> <a href="26454.php">Saliya Ekanayake: "[OMPI users] Process Binding Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio'	enabled"</a>
<li><strong>Reply:</strong> <a href="26456.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio'	enabled"</a>
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
