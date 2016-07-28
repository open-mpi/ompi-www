<?
$subject_val = "[OMPI devel] ofi/mtl causing problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 12:04:10 2014" -->
<!-- isoreceived="20141217170410" -->
<!-- sent="Wed, 17 Dec 2014 10:04:09 -0700" -->
<!-- isosent="20141217170409" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] ofi/mtl causing problems" -->
<!-- id="CAF1Cqj6Xp0PNMaVaLP9pfz2+eio=3hg2Mkr_HxcSZZh4STbdUQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] ofi/mtl causing problems<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 12:04:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16637.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed my MTT smoke test failed with todays master build:
<br>
<p>name=PMI_process_mapping, (val=(vector,(0,4,4)))
<br>
./c_hello./c_hello: : symbol lookup errorsymbol lookup error: :
<br>
/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so:
<br>
: undefined symbol: fi_getinfoundefined symbol: fi_getinfo
<br>
<p>./c_hello: ./c_hellosymbol lookup error: : symbol lookup
<br>
error/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so:
<br>
:
<br>
/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined
<br>
symbol:
<br>
fi_getinfo: undefined symbol: fi_getinfo
<br>
./c_hello: ./c_hello./c_hello./c_hello: : : symbol lookup errorsymbol
<br>
lookup errorsymbol lookup
<br>
error: :
<br>
/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so:
<br>
: : undefined symbol:
<br>
fi_getinfo/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.sosymbol
<br>
lookup
<br>
errorundefined symbol: fi_getinfo
<br>
:
<br>
: /global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined
<br>
symbol:
<br>
fi_getinfo: undefined symbol: fi_getinfo
<br>
./c_hello: symbol lookup error:
<br>
/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so:
<br>
undefined symbol:
<br>
fi_getinfo
<br>
./c_hello./c_hello: : symbol lookup errorsymbol lookup error: :
<br>
/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so:
<br>
: undefined symbol: fi_getinfoundefined symbol: fi_getinfo
<br>
<p>./c_hello: symbol lookup error:
<br>
/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so:
<br>
./c_helloundefined
<br>
symbol: fi_getinfo: symbol lookup error:
<br>
./c_hello: ./c_hellosymbol lookup error./c_hello: : : symbol lookup
<br>
errorsymbol lookup error: :
<br>
/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.so:
<br>
: undefined symbol:
<br>
fi_getinfo/global/u2/h/hpp/mtt_tmp/installs/RqiD/install/lib/openmpi/mca_mtl_ofi.soundefined
<br>
symbol:
<br>
fi_getinfo: undefined symbol: fi_getinfo
<br>
[NID 05538] 2014-12-17 05:58:50 Apid 9226246: initiated application termination
<br>
Application 9226246 exit codes: 127
<br>
<p>*Stderr*
<br>
<p><p>Any ideas on how to fix this?
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16638/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Previous message:</strong> <a href="16637.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
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
