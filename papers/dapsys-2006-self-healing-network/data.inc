<?php 
$title = "Self-Healing Network for Scalable Fault Tolerant Runtime Environments";
$overview = "Describes fault-tolerant protocols for runtime environments.";

$authors = "Thara Angskun, Graham E. Fagg, George Bosilca, 
Jelena Pjesivac-Grbovic, Jack J. Dongarra";

$abstract = "Scalable and fault tolerant runtime environments are 
needed to support and adapt to the underlying libraries and hardware
which require a high degree of scalability in dynamic large-scale
environments.  This paper presents a self-healing network (SHN) for
supporting scalable and fault-tolerant runtime environments. The SHN
is designed to support transmission of messages across multiple nodes
while also protecting against recursive node and process failures. It
will automatically recover itself after a failure occurs. SHN is
implemented on top of a scalable fault-tolerant protocol (SFTP). The
experimental results show that both the latest multicast and broadcast
routing algorithms used in SHN are faster than the original SFTP
routing algorithms.";

$presented = 
"Austrian-Hungarian Workshop on Distributed and Parallel Systems
2006, September, 2006, in Innsbruck, Austria.";

$files[] = "dapsys-2006-self-healing-network.pdf";

$month = 9;
$day = 21;
$year = 2006;

$bibtex = "@inproceedings{angskun-dapsys06,
  author = {Thara Angskun and Graham E. Fagg and George Bosilca and Jelena Pjesivac-Grbovic and Jack J. Dongarra},
  title = {Self-Healing Network for Scalable Fault Tolerant Runtime Environments},
  booktitle = {Proceedings of 6th Austrian-Hungarian workshop on distributed and parallel systems},
  address = {Innsbruck, Austria},
  publisher = {Springer-Verlag},
  month = {September},
  year = {2006},
}";
